<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO WebApp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center"> TODO List</h1>
        <div class="row">
            <div class="col-12">
            <table class="table table-striped table-hover">
                {{-- task name  >> status >> priority >> image >> created_at >> updated_at >>deleted_at --}}

                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Task Name</th>
                    <th scope="col">Status</th>
                    <th scope="col">Priority</th>
                    <th scope="col">Image</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Deleted At</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>new work</td>
                    <td>Active</td>
                    <td>Low</td>
                    <td>IMG</td>
                    <td>2 Min Ago</td>
                    <td>2 Min Ago</td>
                    <td>2 Min Ago</td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>new work</td>
                        <td>Active</td>
                        <td>Low</td>
                        <td>IMG</td>
                        <td>2 Min Ago</td>
                        <td>2 Min Ago</td>
                        <td>2 Min Ago</td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>new work</td>
                        <td>Active</td>
                        <td>Low</td>
                        <td>IMG</td>
                        <td>2 Min Ago</td>
                        <td>2 Min Ago</td>
                        <td>2 Min Ago</td>
                    </tr>
                </tbody>

            </table>
            </div>
        </div>
    </div>








<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>