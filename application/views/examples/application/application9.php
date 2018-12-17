<?php
$this->load->view('examples/application/header');
?>
    <form action="<?= base_url('application_form/page10') ?>">
        <div class="row" style="margin-top: 50px">
            <div class="col-sm-12" style="margin-bottom: 10px">
                <span style="font-weight: bold;margin-right: 10px">16.</span>
                Referees
            </div>
            <div class="col-sm-12">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th width="3%"></th>
                        <th width="20%">Name</th>
                        <th width="20%">Designation</th>
                        <th width="20%">Address</th>
                        <th width="20%">Email Address</th>
                        <th width="20%">Contact Number</th>
                    </tr>
                    </thead>
                    <tbody id="refId"></tbody>
                </table>
            </div>
        </div>
        <div class="row" style="margin-top: 20px">
            <div class="col-sm-6">
                <button class="btn btn-primary" id="addRef" type="button"
                        style="left: 50%;transform: translateX(-50%);position: relative">Add Field
                </button>
            </div>
            <div class="col-sm-6">
                <button class="btn btn-primary" id="removeRef" type="button"
                        style="left: 50%;transform: translateX(-50%);position: relative">Remove Field
                </button>
            </div>
        </div>

        <div class="row" style="margin-top: 50px">
            <div class="col-sm-12" style="margin-bottom: 10px">
                <b>N.B.</b> When applying for the Academic Posts, one of the referees should be either the Professor
                or a Senior Lecturer of the Department of Study in which the applicant had his/her University
                Education or the Head of the Institutions in which the candidate works
            </div>
        </div>

        <hr>

        <div class="row" style="margin-top: 100px;margin-bottom: 80px">
            <div class="col-sm-6">
                <a href="<?= base_url('application_form/page8') ?>">
                    <button class="btn btn-primary" type="button"
                            style="left: 50%;transform: translateX(-50%);position: relative">Previous Page
                    </button>
                </a>
            </div>
            <div class="col-sm-6">
                <button class="btn btn-primary" type="submit"
                        style="left: 50%;transform: translateX(-50%);position: relative">Next Page
                </button>
            </div>
            <div class="col-sm-12" style="margin-top: 50px;text-align: center;font-weight: bold">
                (Page 9)
            </div>
        </div>
    </form>
    <script>
        $('#addRef').click(function () {
            addRowRef();
        });

        $('#removeRef').click(function () {
            if (rowRef > 1) {
                rowRef--;
                <?php
                if (isset($applicantData)) {
                ?>
                $('#refId tr.rowRefButton:last-child').remove();
                $('#refId tr.rowRef:last-child').remove();
                <?php
                } else {
                ?>
                $('#refId tr.rowRef:last-child').remove();
                <?php
                }
                ?>
            }
        });

        var rowRef = 1;

        function addRowRef() {
            $('#refId').append(
                <?php
                if (isset($applicantData)) {
                    echo 'getText1()+getText2()';
                } else {
                    echo 'getText1()';
                }
                ?>
            );
        }

        function getText1() {
            return '<tr class="rowRefButton">\n' +
                '<td colspan="6">' +
                '<div class="row">' +
                '<div class="col-sm-6"><button class="btn btn-warning" style="left: 50%;transform: translateX(-50%);position: relative">Update</div>' +
                '<div class="col-sm-6"><button class="btn btn-warning" style="left: 50%;transform: translateX(-50%);position: relative">Delete</div>' +
                '</div>' +
                '</td>\n' +
                '</tr>';
        }

        function getText2() {
            return '<tr class="rowRefButton">\n' +
                '<td colspan="6">' +
                '<div class="row">' +
                '<div class="col-sm-6"><button class="btn btn-warning" style="left: 50%;transform: translateX(-50%);position: relative">Update</div>' +
                '<div class="col-sm-6"><button class="btn btn-warning" style="left: 50%;transform: translateX(-50%);position: relative">Delete</div>' +
                '</div>' +
                '</td>\n' +
                '</tr>';
        }

        $(window).ready(function () {
            addRowRef();
        });
    </script>
<?php
$this->load->view('examples/application/footer');
?>