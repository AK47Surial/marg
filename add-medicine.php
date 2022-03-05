@@ -0,0 +1,76 @@
<?php
include_once('partials/header.php');
?>
<!-- Content block -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 input-design">
            <p class="h2"><span class="icon fa-medkit"></span> Add Medicine</p>
            <form class="mt-3" action="">
                <div class="form-group">
                    <label class="h6">Medicine Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Medicine Name" >
                </div>
                <div class="form-group">
                    <label class="h6">Buy Prize</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter Buy Prize" >
                </div>
                <div class="form-group">
                    <label class="h6">Sell Prize</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter Sell Prize" >
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-8">
            <p class="h2"><span class="icon fa-book-medical"></span> Medicine List</p>
            <div class="input-group mb-3 mt-4">
                <input type="text" class="form-control" placeholder="Search Medicine" aria-label="Recipient's username" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary mr-sm-2" type="button" id="button-addon2"><span class="icon fa-search"></span> </button>
                </div>
            </div>
            <table class="table mt-2">
                <thead>
                    <tr>
                        <th scope="col">SN</th>
                        <th scope="col">Medicine Name</th>
                        <th scope="col">Buy Prize</th>
                        <th scope="col">Sell Prize</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>
                            <i class="fa-solid fa-pen-to-square" data-toggle="tooltip" data-placement="bottom" title="Update"></i>
                            <i class="fa-solid fa-trash-can" data-toggle="tooltip" data-placement="bottom" title="Delete"></i>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td><span class="icon fa-ellipsis-vertical"></span></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td><span class="icon fa-ellipsis-vertical"></span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Content block end -->
<?php
include_once('partials/footer.php');
?>
