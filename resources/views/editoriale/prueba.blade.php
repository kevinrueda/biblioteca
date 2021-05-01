<html>

<head>
    <title>Webslesson Demo - PHP PDO Ajax CRUD with Data Tables and Bootstrap Modals</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f1f1f1;
        }

        .box {
            width: 1270px;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 25px;
        }

    </style>
</head>

<body>
    <div class="container box">
        <h1 align="center">PHP PDO Ajax CRUD with Data Tables and Bootstrap Modals</h1>
        <br />
        <div class="table-responsive">
            <br />
            <div align="right">
                <button type="button" id="add_button" data-toggle="modal" data-target="#userModal"
                    class="btn btn-info btn-lg">Add</button>
            </div>
            <br /><br />
            <table id="user_data" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="10%">Image</th>
                        <th width="35%">First Name</th>
                        <th width="35%">Last Name</th>
                        <th width="10%">Edit</th>
                        <th width="10%">Delete</th>
                    </tr>
                </thead>
            </table>

        </div>
    </div>
</body>

</html>

<div id="userModal" class="modal fade">
    <div class="modal-dialog">
        <form method="post" id="user_form" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add User</h4>
                </div>
                <div class="modal-body">
                    <label>Enter First Name</label>
                    <input type="text" name="first_name" id="first_name" class="form-control" />
                    <br />
                    <label>Enter Last Name</label>
                    <input type="text" name="last_name" id="last_name" class="form-control" />
                    <br />
                    <label>Select User Image</label>
                    <input type="file" name="user_image" id="user_image" />
                    <span id="user_uploaded_image"></span>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="user_id" id="user_id" />
                    <input type="hidden" name="operation" id="operation" />
                    <input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript" language="javascript">
    $(document).ready(function() {
        $('#add_button').click(function() {
            $('#user_form')[0].reset();
            $('.modal-title').text("Add User");
            $('#action').val("Add");
            $('#operation').val("Add");
            $('#user_uploaded_image').html('');
        });

        var dataTable = $('#user_data').DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                url: "fetch.php",
                type: "POST"
            },
            "columnDefs": [{
                "targets": [0, 3, 4],
                "orderable": false,
            }, ],

        });

        $(document).on('submit', '#user_form', function(event) {
            event.preventDefault();
            var firstName = $('#first_name').val();
            var lastName = $('#last_name').val();
            var extension = $('#user_image').val().split('.').pop().toLowerCase();
            if (extension != '') {
                if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                    alert("Invalid Image File");
                    $('#user_image').val('');
                    return false;
                }
            }
            if (firstName != '' && lastName != '') {
                $.ajax({
                    url: "insert.php",
                    method: 'POST',
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        alert(data);
                        $('#user_form')[0].reset();
                        $('#userModal').modal('hide');
                        dataTable.ajax.reload();
                    }
                });
            } else {
                alert("Both Fields are Required");
            }
        });

        $(document).on('click', '.update', function() {
            var user_id = $(this).attr("id");
            $.ajax({
                url: "fetch_single.php",
                method: "POST",
                data: {
                    user_id: user_id
                },
                dataType: "json",
                success: function(data) {
                    $('#userModal').modal('show');
                    $('#first_name').val(data.first_name);
                    $('#last_name').val(data.last_name);
                    $('.modal-title').text("Edit User");
                    $('#user_id').val(user_id);
                    $('#user_uploaded_image').html(data.user_image);
                    $('#action').val("Edit");
                    $('#operation').val("Edit");
                }
            })
        });

        $(document).on('click', '.delete', function() {
            var user_id = $(this).attr("id");
            if (confirm("Are you sure you want to delete this?")) {
                $.ajax({
                    url: "delete.php",
                    method: "POST",
                    data: {
                        user_id: user_id
                    },
                    success: function(data) {
                        alert(data);
                        dataTable.ajax.reload();
                    }
                });
            } else {
                return false;
            }
        });


    });

</script>


db.php


<?php
$username = 'root';
$password = '';
$connection = new PDO('mysql:host=localhost;dbname=crud', $username, $password);
?>


function.php


<?php
function upload_image()
{
if (isset($_FILES['user_image'])) {
$extension = explode('.', $_FILES['user_image']['name']);
$new_name = rand() . '.' . $extension[1];
$destination = './upload/' . $new_name;
move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);
return $new_name;
}
}

function get_image_name($user_id)
{
include 'db.php';
$statement = $connection->prepare("SELECT image FROM users WHERE id = '$user_id'");
$statement->execute();
$result = $statement->fetchAll();
foreach ($result as $row) {
return $row['image'];
}
}

function get_total_all_records()
{
include 'db.php';
$statement = $connection->prepare('SELECT * FROM users');
$statement->execute();
$result = $statement->fetchAll();
return $statement->rowCount();
}
?>


fetch.php


<?php
include 'db.php';
include 'function.php';
$query = '';
$output = [];
$query .= 'SELECT * FROM users ';
if (isset($_POST['search']['value'])) {
$query .= 'WHERE first_name LIKE "%' . $_POST['search']['value'] . '%" ';
$query .= 'OR last_name LIKE "%' . $_POST['search']['value'] . '%" ';
}
if (isset($_POST['order'])) {
$query .= 'ORDER BY ' . $_POST['order']['0']['column'] . ' ' . $_POST['order']['0']['dir'] . ' ';
} else {
$query .= 'ORDER BY id DESC ';
}
if ($_POST['length'] != -1) {
$query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}
$statement = $connection->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = [];
$filtered_rows = $statement->rowCount();
foreach ($result as $row) {
$image = '';
if ($row['image'] != '') {
$image = '<img src="upload/' . $row['image'] . '" class="img-thumbnail" width="50" height="35" />';
} else {
$image = '';
}
$sub_array = [];
$sub_array[] = $image;
$sub_array[] = $row['first_name'];
$sub_array[] = $row['last_name'];
$sub_array[] = '<button type="button" name="update" id="' . $row['id'] . '"
    class="btn btn-warning btn-xs update">Update</button>';
$sub_array[] = '<button type="button" name="delete" id="' . $row['id'] . '"
    class="btn btn-danger btn-xs delete">Delete</button>';
$data[] = $sub_array;
}
$output = [
'draw' => intval($_POST['draw']),
'recordsTotal' => $filtered_rows,
'recordsFiltered' => get_total_all_records(),
'data' => $data,
];
echo json_encode($output);
?>


insert.php


<?php
include 'db.php';
include 'function.php';
if (isset($_POST['operation'])) {
if ($_POST['operation'] == 'Add') {
$image = '';
if ($_FILES['user_image']['name'] != '') {
$image = upload_image();
}
$statement = $connection->prepare("
INSERT INTO users (first_name, last_name, image)
VALUES (:first_name, :last_name, :image)
");
$result = $statement->execute([
':first_name' => $_POST['first_name'],
':last_name' => $_POST['last_name'],
':image' => $image,
]);
if (!empty($result)) {
echo 'Data Inserted';
}
}
if ($_POST['operation'] == 'Edit') {
$image = '';
if ($_FILES['user_image']['name'] != '') {
$image = upload_image();
} else {
$image = $_POST['hidden_user_image'];
}
$statement = $connection->prepare(
"UPDATE users
SET first_name = :first_name, last_name = :last_name, image = :image
WHERE id = :id
",
);
$result = $statement->execute([
':first_name' => $_POST['first_name'],
':last_name' => $_POST['last_name'],
':image' => $image,
':id' => $_POST['user_id'],
]);
if (!empty($result)) {
echo 'Data Updated';
}
}
}
?>


fetch_single.php


<?php
include 'db.php';
include 'function.php';
if (isset($_POST['user_id'])) {
$output = [];
$statement = $connection->prepare(
"SELECT * FROM users
WHERE id = '" .
$_POST['user_id'] .
"'
LIMIT 1",
);
$statement->execute();
$result = $statement->fetchAll();
foreach ($result as $row) {
$output['first_name'] = $row['first_name'];
$output['last_name'] = $row['last_name'];
if ($row['image'] != '') {
$output['user_image'] = '<img src="upload/' . $row['image'] . '" class="img-thumbnail" width="50" height="35" /><input
    type="hidden" name="hidden_user_image" value="' . $row['image'] . '" />';
} else {
$output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';
}
}
echo json_encode($output);
}
?>


delete.php


<?php
include 'db.php';
include 'function.php';

if (isset($_POST['user_id'])) {
$image = get_image_name($_POST['user_id']);
if ($image != '') {
unlink('upload/' . $image);
}
$statement = $connection->prepare('DELETE FROM users WHERE id = :id');
$result = $statement->execute([
':id' => $_POST['user_id'],
]);

if (!empty($result)) {
echo 'Data Deleted';
}
}


?>
