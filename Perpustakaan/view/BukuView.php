<?php
class BukuView {
    public function tampilkan($bukuList) {
        echo '
        <!DOCTYPE html>
        <html lang="id">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Daftar Buku Perpustakaan</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
            <style>
                body {
                    background-color: #f8f9fa;
                }
                .container {
                    margin-top: 60px;
                }
                .card {
                    border-radius: 15px;
                    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
                }
                th {
                    background-color: #007bff;
                    color: white;
                }
                tr:hover {
                    background-color: #eaf2ff;
                }
            </style>
        </head>
        <body>
            <div class="container">
                <div class="card p-4">
                    <h2 class="text-center mb-4 text-primary">📚 Daftar Buku Perpustakaan</h2>
                    <table class="table table-bordered table-striped text-center align-middle">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Pengarang</th>
                                <th>Tahun Terbit</th>
                            </tr>
                        </thead>
                        <tbody>';
        
        foreach ($bukuList as $index => $buku) {
    $rowColor = $index % 2 == 0 ? '#f8f9fa' : '#ffffff';
    echo "<tr style='background-color: {$rowColor};'>
            <td>{$buku['judul']}</td>
            <td>{$buku['pengarang']}</td>
            <td>{$buku['tahun']}</td>
        </tr>";
}

        echo '          </tbody>
                    </table>
                </div>
            </div>
        </body>
        </html>';
    }
}
