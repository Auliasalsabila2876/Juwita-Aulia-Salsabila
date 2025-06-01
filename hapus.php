<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Sanitize the input to prevent SQL injection
    $id = mysqli_real_escape_string($koneksi, $id);
    
    // First, check if the record exists
    $check_query = "SELECT id FROM tb_mahasiswa WHERE id = '$id'";
    $check_result = mysqli_query($koneksi, $check_query);
    
    if (mysqli_num_rows($check_result) > 0) {
        // Record exists, proceed with deletion
        $delete_query = "DELETE FROM tb_mahasiswa WHERE id = '$id'";
        
        if (mysqli_query($koneksi, $delete_query)) {
            // Check if any rows were actually deleted
            if (mysqli_affected_rows($koneksi) > 0) {
                header("Location: index.php?status=sukses&pesan=" . urlencode("Data berhasil dihapus"));
            } else {
                header("Location: index.php?status=gagal&pesan=" . urlencode("Tidak ada data yang dihapus"));
            }
        } else {
            // SQL error
            header("Location: index.php?status=gagal&pesan=" . urlencode("Error: " . mysqli_error($koneksi)));
        }
    } else {
        // Record doesn't exist
        header("Location: index.php?status=gagal&pesan=" . urlencode("Data dengan ID '$id' tidak ditemukan"));
    }
} else {
    // No ID parameter
    header("Location: index.php?status=gagal&pesan=" . urlencode("ID tidak ditemukan dalam parameter"));
}

// Close connection
mysqli_close($koneksi);
?>