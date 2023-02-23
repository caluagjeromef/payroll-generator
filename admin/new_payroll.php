<?php
session_start();
if (!isset($_SESSION['auth']) || $_SESSION['auth'] !== true) {
    $_SESSION['message'] = "You must be logged in to access the page.";
    header("Location: ../login.php");
    exit();
}
$title = "Add New Payroll";
include('config/dbconn.php');
include('includes/header.php');
include_once ('inc_view/inc_post_file.php');
?>
<h1><?php include('../message.php'); ?></h1>
<div class="container-fluid py-3" id="auth-user">
            <header>
                <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
                	<h3>Upload Excel File</h3>
                    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                        <form enctype="multipart/form-data" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" class=" ">
                            <div class="input-group">
                                <input required type="file" class="form-control form-control-sm" name="emp_info_file" id="emp_info_file" accept="<?php echo XLS_EXT;?>,<?php echo XLSX_EXT;?>" />
                                <button type="submit" name="upload_file" class="btn btn-success btn-sm">Submit</button>
                            </div>
                        </form>
                    </nav>
                </div>
            </header>
            <?php if (count($empDatas) > 0): ?>
            <main>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2 col-sm-12">
                            <select id="payslipPeriod" name="payslipPeriod" class="form-select form-select-sm" aria-label="Select Payslip Period">
                                <?php 
                                    for ($i = 0; $i < PAYSLIP_DROPDOWN_SHOW_MONTH; $i++) {
                                        $m = date('F, Y', strtotime(-$i . 'month'));
                                        $selected = ($i == 0 )? ' selected' :'';
                                        echo '<option'.$selected.' value="'.$m.'">'.$m.'</option>';
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <button class="btn btn-primary btn-sm zipDownloadBtn">
                                <i class="far fa-file-archive"></i> Download Zip (<span class="countValue"></span>)
                            </button>
                            <?php  if (EMAIL_ENABLE == true) { ?>
                            <button class="btn btn-secondary btn-sm sendAllMailBtn">
                                <i class="far fa-envelope"></i> Send Email to All (<span class="countValue"></span>)
                            </button>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="excel-table-wrap">
                    <table id="empTable" class="table" style="width:100%">
                        <thead>
                            <tr>
                                <th>
                                    <div class="form-check form-switch">
                                        <input checked type="checkbox" class="selectAll form-check-input select_all"  />
                                    </div>
                                </th>
                                <th>Action</th>
                                <th>
                                    <?php 
                                        $headerData = current($empDatas);
                                        unset($headerData['enc']);
                                        echo implode('</th><th>', array_keys($headerData)); 
                                    ?>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($empDatas as $row): array_map('htmlentities', $row); ?>
                            <tr>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" checked value="<?php  echo $row['enc']; ?>" type="checkbox" name="empIDs[]">
                                </div>
                            </td>
                            <td>
                                <a title="PDF Download" class="text-color-Tomato" href="javascript:void(0)" onclick="downloadFile('pdf', '<?php  echo $row['enc']; ?>')"><i class="fas fa-file-pdf"></i></a>
                                <?php  if (EMAIL_ENABLE == true) { ?>
                                <a title="Send Email" class="text-color-Tomato" href="javascript:void(0)" onclick="downloadFile('email', '<?php  echo $row['enc']; ?>')"><i class="far fa-envelope"></i></a>
                                <?php } ?>
                            </td>
                            <?php 
                                unset($row['enc']);
                            ?>
                            <td><?php echo implode('</td><td>', splitPipeContent($row)); ?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>
                                    <div class="form-check form-switch">
                                        <input checked type="checkbox" class="selectAll form-check-input select_all"  />
                                    </div>
                                </th>
                                <th>Action</th>
                                <th>
                                    <?php 
                                        $headerData = current($empDatas);
                                        unset($headerData['enc']);
                                        echo implode('</th><th>', array_keys($headerData)); 
                                    ?>
                                </th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <button class="btn btn-primary btn-sm zipDownloadBtn">
                                <i class="far fa-file-archive"></i> Download Zip (<span class="countValue"></span>)
                            </button>
                            <?php  if (EMAIL_ENABLE == true) { ?>
                            <button class="btn btn-secondary btn-sm sendAllMailBtn">
                                <i class="far fa-envelope"></i> Send Email to All (<span class="countValue"></span>)
                            </button>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </main>
            <?php include_once 'inc_view/modal.php' ?>
            <?php endif; ?>
        </div>




<?php 
include('includes/script.php');
include('includes/footer.php');
?>