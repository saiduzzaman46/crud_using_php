<?php include "insertUpdateData.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <main class="continer">
        <div class="continer--1 login-container">
            <form class="login-box" action="insertUpdateData.php" method="POST" autocomplete="off">
                <input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?>">
                <label for="fullname" class="fullname">Full Name:</label>
                <input type="text" id="fullname" name="fullname" value="<?php echo isset($update_data['fullname']) ? $update_data['fullname'] : ''; ?>" required />

                <label for="email" class="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo isset($update_data['email']) ? $update_data['email'] : ''; ?>" required />

                <label for="number" class="number">Number:</label>
                <input type="tel" id="number" name="number" value="<?php echo isset($update_data['number']) ? $update_data['number'] : ''; ?>" required />

                <label for="gender" class="gender">Gender:</label>
                <select name="gender" id="gender" required>
                    <option value="">select</option>
                    <option value="Male" <?php echo isset($update_data['gender']) && $update_data['gender'] === 'Male' ? 'selected' : ''; ?>>Male</option>
                    <option value="Female" <?php echo isset($update_data['gender']) && $update_data['gender'] === 'Female' ? 'selected' : ''; ?>>Female</option>
                </select>

                <label for="address" class="address">Address:</label>
                <input type="text" id="address" name="address" value="<?php echo isset($update_data['address']) ? $update_data['address'] : ''; ?>" required />

                <label for="username" class="username">Username:</label>
                <input type="text" id="username" name="username" value="<?php echo isset($update_data['username']) ? $update_data['username'] : ''; ?>" required />

                <label for="password" class="pass">Password:</label>
                <input
                    type="password"
                    id="password"
                    class="pass"
                    name="password" />

                <button type="submit" class="submit" name="submit">Submit</button>
            </form>
        </div>
        <div class="continer--1 table-container">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Number</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>Username</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include "addTableData.php" ?>
                    
                </tbody>
                <?php include "deleteData.php" ?>
            </table>
        </div>
    </main>
    <script src="script.js"></script>
</body>

</html>
