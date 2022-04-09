<?php require APPROOT . '/views/includes/header.php';  ?>

    <div class="text-end" style="margin: 10px;margin-top: 30px;"><a href="<?php echo URLROOT;?>/User/editCredentials/<?php echo $_SESSION['user_id'];?>"
            style="color: #000000;margin-right: 20px;">Change credentials</a></div>
    <div class="text-end" style="margin: 10px;margin-top: 10px;"><a href="<?php echo URLROOT;?>/User/editProfile/<?php echo $_SESSION['user_id'];?>"
            style="color: #000000;margin-right: 20px;">Edit profile</a></div>
    <div class="container">
        <h1 style="margin-bottom: 25px;margin-top: 50px;text-align: center;">Past orders</h1>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Column 1</th>
                        <th>Column 1</th>
                        <th>Column 2</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Cell 1</td>
                        <td>Cell 1</td>
                        <td>Cell 2</td>
                    </tr>
                    <tr>
                        <td>Cell 1</td>
                        <td>Cell 1</td>
                        <td>Cell 2</td>
                    </tr>
                    <tr>
                        <td>Cell 3</td>
                        <td>Cell 3</td>
                        <td>Cell 4</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="container">
        <h1 style="margin-bottom: 25px;margin-top: 50px;text-align: center;">Return orders</h1>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Column 1</th>
                        <th>Column 1</th>
                        <th>Column 2</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Cell 1</td>
                        <td>Cell 1</td>
                        <td>Cell 2</td>
                    </tr>
                    <tr>
                        <td>Cell 1</td>
                        <td>Cell 1</td>
                        <td>Cell 2</td>
                    </tr>
                    <tr>
                        <td>Cell 3</td>
                        <td>Cell 3</td>
                        <td>Cell 4</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="container">
        <h1 style="margin-bottom: 25px;margin-top: 50px;text-align: center;">Reviews</h1>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Column 1</th>
                        <th>Column 1</th>
                        <th>Column 2</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Cell 1</td>
                        <td>Cell 1</td>
                        <td>Cell 2</td>
                    </tr>
                    <tr>
                        <td>Cell 1</td>
                        <td>Cell 1</td>
                        <td>Cell 2</td>
                    </tr>
                    <tr>
                        <td>Cell 3</td>
                        <td>Cell 3</td>
                        <td>Cell 4</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php require APPROOT . '/views/includes/footer.php';  ?>
