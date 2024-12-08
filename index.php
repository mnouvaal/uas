<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan & Produk</title>
    <style>
        /* General reset and body styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        /* Header Styling */
        header {
            background: linear-gradient(135deg, #0073e6, #005bb5); /* Blue gradient background */
            color: white;
            padding: 30px 0;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Soft shadow for depth */
            margin-bottom: 40px;
        }

        header h1 {
            font-size: 36px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 10px;
        }

        header p {
            font-size: 18px;
            font-weight: 400;
            margin-top: 5px;
            opacity: 0.8;
        }

        /* Navbar styling */
        nav {
            background-color: #0073e6;
            padding: 10px;
            text-align: right;
        }

        nav ul {
            list-style-type: none;
        }

        nav ul li {
            display: inline-block;
            margin-left: 20px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        /* User profile dropdown */
        .user-profile {
            position: relative;
            display: inline-block;
        }

        .user-profile-dropdown {
            display: none;
            position: absolute;
            right: 0;
            background-color: #fff;
            color: #333;
            border: 1px solid #ccc;
            border-radius: 5px;
            min-width: 150px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 10px;
            padding: 10px;
            text-align: left;
        }

        .user-profile:hover .user-profile-dropdown {
            display: block;
        }

        .user-profile-dropdown a {
            color: #333;
            text-decoration: none;
            display: block;
            padding: 8px;
        }

        .user-profile-dropdown a:hover {
            background-color: #f4f4f4;
        }

        /* Container for content sections */
        .container {
            display: flex;
            justify-content: center; /* Adjusted to center content */
            flex-wrap: wrap;
            gap: 20px;
        }

        /* Pemesanan Section */
        .pemesanan {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 48%;
        }

        .pemesanan h2 {
            font-size: 24px;
            margin-bottom: 20px;
            font-weight: bold;
            text-align: center;
        }

        .pemesanan label {
            display: block;
            font-size: 16px;
            margin-bottom: 10px;
        }

        .pemesanan select,
        .pemesanan input[type="text"],
        .pemesanan input[type="number"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
            margin-bottom: 20px;
        }

        .pemesanan button {
            width: 100%;
            padding: 12px;
            background-color: #3498db;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .pemesanan button:hover {
            background-color: #2980b9;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                align-items: center;
            }

            .pemesanan {
                width: 80%;
            }

            nav {
                text-align: center;
            }
        }

    </style>
</head>
<body>

    <!-- Navbar Section -->
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Orders</a></li>
            <li class="user-profile">
                <a href="#">User</a>
                <div class="user-profile-dropdown">
                    <a href="#">Profile</a>
                    <a href="#">Logout</a>
                </div>
            </li>
        </ul>
    </nav>

    <!-- Header Section -->
    <header>
        <h1>Sistem Informasi Manufaktur</h1>
        <p>Pesan Produk dan Tentukan Jumlah Pemesanan Anda</p>
    </header>

    <!-- Main Content Section -->
    <div class="container">
        <!-- Pemesanan Section -->
        <div class="pemesanan">
            <h2>Jumlah Pemesanan</h2>
            <form id="orderForm" action="#" method="POST" onsubmit="return handleSubmit(event)">
                <!-- Product Selection -->
                <label for="product">Pilih Produk:</label>
                <select id="product" name="product" required>
                    <option value="produk1">Produk 1</option>
                    <option value="produk2">Produk 2</option>
                    <option value="produk3">Produk 3</option>
                    <option value="produk4">Produk 4</option>
                </select>

                <!-- Quantity Input -->
                <label for="quantity">Jumlah Barang:</label>
                <input type="number" id="quantity" name="quantity" min="1" required placeholder="Masukkan jumlah barang">

                <!-- Customer Address Fields -->
                <h3>Alamat Pemesan</h3>
                <label for="name">Nama Lengkap:</label>
                <input type="text" id="name" name="name" required placeholder="Masukkan nama lengkap">

                <label for="address">Alamat Lengkap:</label>
                <input type="text" id="address" name="address" required placeholder="Masukkan alamat lengkap">

                <label for="city">Kota:</label>
                <input type="text" id="city" name="city" required placeholder="Masukkan kota">

                <label for="postalCode">Kode Pos:</label>
                <input type="text" id="postalCode" name="postalCode" required placeholder="Masukkan kode pos">

                <button type="submit">Pesan Sekarang</button>
            </form>

            <!-- Message after form submission -->
            <div id="orderMessage" style="margin-top: 20px; display: none;">
                <h3>Pesanan Anda:</h3>
                <p id="productDetails"></p>
                <p id="quantityDetails"></p>
                <h3>Alamat Pengiriman:</h3>
                <p id="addressDetails"></p>
            </div>
        </div>
    </div>

    <!-- JavaScript for handling form submission -->
    <script>
        function handleSubmit(event) {
            event.preventDefault(); // Prevent form from reloading the page

            // Get the product and quantity details
            const product = document.getElementById('product').value;
            const quantity = document.getElementById('quantity').value;

            // Get the address details
            const name = document.getElementById('name').value;
            const address = document.getElementById('address').value;
            const city = document.getElementById('city').value;
            const postalCode = document.getElementById('postalCode').value;

            // Display the result after submission
            document.getElementById('productDetails').textContent = `Produk: ${product}`;
            document.getElementById('quantityDetails').textContent = `Jumlah: ${quantity}`;
            document.getElementById('addressDetails').textContent = `Nama: ${name}, Alamat: ${address}, Kota: ${city}, Kode Pos: ${postalCode}`;

            // Show the confirmation message
            document.getElementById('orderMessage').style.display = 'block';
        }
    </script>

</body>
</html>
