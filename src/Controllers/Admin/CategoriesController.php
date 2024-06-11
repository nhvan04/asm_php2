<?php

namespace Vanch\FpolyBase\Controllers\Admin;

use Vanch\FpolyBase\Commons\Controller;
use Vanch\FpolyBase\Models\Category;
use Rakit\Validation\Validator;

class CategoriesController extends Controller
{
    private Category $category;

    public function __construct()
    {
        $this->category = new Category();
    }

    public function index()
    {
        [$categories, $totalPage] = $this->category->paginate($_GET['page'] ?? 1);

        $this->renderViewAdmin('categories.index', [
            'categories' => $categories,
            'totalPage' => $totalPage
        ]);
    }

    public function create()
    {
        $this->renderViewAdmin('categories.create');
    }

    public function store()
    {
        $validator = new Validator;
        $validation = $validator->make($_POST, [
            'name' => 'required|max:50',
        ]);
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();
            header('Location: ' . url('admin/categories/create'));
            exit;
        }

        $data = [
            'name' => $_POST['name'],
        ];

        $this->category->insert($data);

        $_SESSION['status'] = true;
        $_SESSION['msg'] = 'Thao tác thành công';
        header('Location: ' . url('admin/categories'));
        exit;
    }

    public function edit($id)
    {
        $category = $this->category->findById($id);
        if (!$category) {
            $_SESSION['errors'] = 'Không tìm thấy danh mục';
            header('Location: ' . url('admin/categories'));
            exit;
        }

        $this->renderViewAdmin('categories.edit', ['category' => $category]);
    }

    public function update($id)
    {
        $category = $this->category->findById($id);
        if (!$category) {
            $_SESSION['errors'] = 'Không tìm thấy danh mục';
            header('Location: ' . url('admin/categories'));
            exit;
        }

        $validator = new Validator;
        $validation = $validator->make($_POST, [
            'name' => 'required|max:50',
        ]);
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();
            header('Location: ' . url("admin/categories/{$id}/edit"));
            exit;
        }

        $data = [
            'name' => $_POST['name'],
        ];

        $this->category->update($id, $data);

        $_SESSION['status'] = true;
        $_SESSION['msg'] = 'Thao tác thành công';
        header('Location: ' . url("admin/categories"));
        exit;
    }

    public function delete($id)
    {
        $category = $this->category->findById($id);
        if (!$category) {
            $_SESSION['errors'] = 'Không tìm thấy danh mục';
            header('Location: ' . url('admin/categories'));
            exit;
        }

        $this->category->delete($id);

        $_SESSION['status'] = true;
        $_SESSION['msg'] = 'Thao tác thành công';
        header('Location: ' . url('admin/categories'));
        exit();
    }
}
