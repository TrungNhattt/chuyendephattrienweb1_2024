<?php
session_start();
require_once 'models/UserModel.php';

if (isset($_GET['id'])) {
    $userModel = new UserModel();

    // Giải mã ID và kiểm tra tính hợp lệ
    $id = base64_decode($_GET['id']);
    
    if ($id && is_numeric($id)) {
        // Gọi phương thức xóa người dùng từ mô hình
        $result = $userModel->deleteUser($id);
        
        if ($result) {
            $_SESSION['success'] = 'User has been deleted successfully!';
        } else {
            $_SESSION['error'] = 'Failed to delete user. Please try again.';
        }
    } else {
        $_SESSION['error'] = 'Invalid user ID.';
    }
} else {
    $_SESSION['error'] = 'No user ID provided.';
}

// Quay lại trang trước hoặc trang danh sách người dùng
header('Location: list_users.php');
exit;
