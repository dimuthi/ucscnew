<?php
include "header.php";
?>
    <div class="content" style="padding-left: 0px;padding-right: 30px">
        <nav class="navbar navbar-transparent navbar-absolute">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-12">

                        <div class="card">
                            <div class="card-header card-header-icon" data-background-color="purple">
                                <i class="material-icons">assignment</i>
                            </div>
                            <div class="card-content">
                                <h4 class="card-title" style="color: #4e4e4e;font-size: 17px;font-weight: bold">
                                    APPLICANT DETAILS</h4>
                                <div class="toolbar">
                                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                                </div>
                                <div class="material-datatables">
                                    <table class="table table-striped table-no-bordered table-hover datatables"
                                           cellspacing="0"
                                           width="100%" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Student ID</th>
                                            <th>Name With Initials</th>
                                            <th>Email</th>
                                            <th class="disabled-sorting text-right">Remove</th>
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th>Student ID</th>
                                            <th>Name With Initials</th>
                                            <th>Email</th>
                                            <th class="text-right">Remove</th>
                                        </tr>
                                        </tfoot>
                                        <tbody>
                                        <tr style="font-size: 16px;background-color: white;height: 50px;cursor: pointer"
                                        <td></td>
                                        <td>abc</td>
                                        <td>abc</td>
                                        <td>abc</td>
                                        <td class="text-right">
                                            <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i
                                                        class="material-icons">close</i></a>
                                        </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- end content-->
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="card">
                            <form class="form-horizontal" action="" method="post">
                                <div class="card-header card-header-text" data-background-color="rose">
                                    <h4 class="card-title" style="font-weight: lighter">APPLICANT DATA</h4>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-content">
                                    <div class="row">
                                        <label class="col-sm-2 label-on-left">Student ID</label>
                                        <div class="col-sm-9">
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label"></label>
                                                <input type="text" class="form-control" name="txtId" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </nav>
    </div>

<?php
include "footer.php";
?>