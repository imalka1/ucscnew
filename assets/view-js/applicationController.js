var today = new Date();
var dd = today.getDate();
var mm = today.getMonth() + 1; //January is 0!
var yyyy = today.getFullYear();
if (dd < 10) {
    dd = '0' + dd
}
if (mm < 10) {
    mm = '0' + mm
}
today = mm + '/' + dd + '/' + yyyy;
$('#appDate').text(today);

$('#submitVacancy').click(function () {
    // window.location.replace('');
});

var aosCount = 3;
$('#addAos').click(function () {
    $('#aosId').append('' +
        '<div class="col-sm-6" style="margin-bottom: 15px"><span>' + aosCount++ + '.</span> <input type="text" class="form-control"></div>')
});

$('#removeAos').click(function () {
    if (aosCount > 2) {
        aosCount--;
        $('#aosId div.col-sm-6:last-child').remove();
    }
});


$('#addSe').click(function () {
    addRowSe();
});

$('#removeSe').click(function () {
    if (rowSe > 1) {
        rowSe--;
        $('#seId tr:last-child').remove();
    }
});

$('#addHe').click(function () {
    addRowHe();
});

$('#removeHe').click(function () {
    if (rowHe > 1) {
        rowHe--;
        $('#heId tr.rowHeFile:last-child').remove();
        $('#heId tr.rowHe:last-child').remove();
    }
});

$('#addAoq').click(function () {
    addRowAoq()
});

$('#removeAoq').click(function () {
    if (rowAoq > 1) {
        rowAoq--;
        $('#aoqId tr.rowAoqFile:last-child').remove();
        $('#aoqId tr.rowAoq:last-child').remove();
    }
});

$('#addPq').click(function () {
    addRowPq();
});

$('#removePq').click(function () {
    if (rowPq > 1) {
        rowPq--;
        $('#pqId tr.rowPq:last-child').remove();
    }
});

$('#addEr').click(function () {
    addRowEr();
});

$('#removeEr').click(function () {
    if (rowEr > 1) {
        rowEr--;
        $('#erId tr.rowEr:last-child').remove();
    }
});

$('#addRef').click(function () {
    addRowRef();
});

$('#removeRef').click(function () {
    if (rowRef > 1) {
        rowRef--;
        $('#refId tr.rowRef:last-child').remove();
    }
});

var rowSe = 1;

function addRowSe() {
    $('#seId').append('' +
        '<tr class="rowSe">\n' +
        '<td width="3%">' + rowSe++ + '</td>\n' +
        '<td width="30%"><input type="text" class="form-control"></td>\n' +
        '<td width="20%"><input type="text" class="form-control"></td>\n' +
        '<td width="20%"><input type="text" class="form-control"></td>\n' +
        '<td width="15%"><input type="text" class="form-control"></td>\n' +
        '<td width="15%"><input type="text" class="form-control"></td>\n' +
        '</tr>'
    );
}

var rowHe = 1;

function addRowHe() {
    $('#heId').append('' +
        '<tr class="rowHe">\n' +
        '<td width="3%">' + rowHe++ + '</td>\n' +
        '<td width="25%"><input type="text" class="form-control"></td>\n' +
        '<td width="12%"><input type="date" class="form-control"></td>\n' +
        '<td width="12%"><input type="date" class="form-control"></td>\n' +
        '<td width="10%"><input type="text" class="form-control"></td>\n' +
        '<td width="10%"><input type="number" class="form-control"></td>\n' +
        '<td width="10%"><input type="text" class="form-control"></td>\n' +
        '<td width="10%"><input type="text" class="form-control"></td>\n' +
        '<td width="10%"><input type="text" class="form-control"></td>\n' +
        '</tr>' +
        '<tr class="rowHeFile">\n' +
        '<td colspan="9"><input type="file"></td>\n' +
        '</tr>'
    );
}

var rowAoq = 1;

function addRowAoq() {
    $('#aoqId').append('' +
        '<tr class="rowAoq">\n' +
        '<td width="3%">' + rowAoq++ + '</td>\n' +
        '<td width="25%"><input type="text" class="form-control"></td>\n' +
        '<td width="25%"><input type="text" class="form-control"></td>\n' +
        '<td width="25%"><input type="text" class="form-control"></td>\n' +
        '<td width="25%"><input type="text" class="form-control"></td>\n' +
        '</tr>' +
        '<tr class="rowAoqFile">\n' +
        '<td colspan="5"><input type="file"></td>\n' +
        '</tr>'
    );
}

var rowPq = 1;

function addRowPq() {
    $('#pqId').append('' +
        '<tr class="rowPq">\n' +
        '<td width="3%">' + rowPq++ + '</td>\n' +
        '<td width="30%"><input type="text" class="form-control"></td>\n' +
        '<td width="15%"><input type="text" class="form-control"></td>\n' +
        '<td width="15%"><input type="text" class="form-control"></td>\n' +
        '<td width="20%"><input type="text" class="form-control"></td>\n' +
        '<td width="20%"><input type="text" class="form-control"></td>\n' +
        '</tr>'
    );
}

function addRowPste() {
    var languages = ["Sinhala", "English", "Tamil"];
    for (var i = 0; i < languages.length; i++) {
        $('#psteId').append('' +
            '<tr class="rowPste">\n' +
            '<td width="10%">' + languages[i] + '</td>\n' +
            '<td width="11.25%"><input type="checkbox" style="margin-left: 65px"></td>\n' +
            '<td width="11.25%"><input type="checkbox" style="margin-left: 65px"></td>\n' +
            '<td width="11.25%"><input type="checkbox" style="margin-left: 65px"></td>\n' +
            '<td width="11.25%"><input type="checkbox" style="margin-left: 65px"></td>\n' +
            '<td width="11.25%"><input type="checkbox" style="margin-left: 65px"></td>\n' +
            '<td width="11.25%"><input type="checkbox" style="margin-left: 65px"></td>\n' +
            '<td width="11.25%"><input type="checkbox" style="margin-left: 65px"></td>\n' +
            '<td width="11.25%"><input type="checkbox" style="margin-left: 65px"></td>\n' +
            '</tr>'
        );
    }
}

var rowEr = 1;

function addRowEr() {
    $('#erId').append('' +
        '<tr class="rowEr">\n' +
        '<td width="3%">' + rowEr++ + '</td>\n' +
        '<td width="15%"><input type="text" class="form-control"></td>\n' +
        '<td width="20%"><input type="text" class="form-control"></td>\n' +
        '<td width="15%"><input type="text" class="form-control"></td>\n' +
        '<td width="15%"><input type="text" class="form-control"></td>\n' +
        '<td width="15%"><input type="text" class="form-control"></td>\n' +
        '<td width="20%"><input type="text" class="form-control"></td>\n' +
        '</tr>'
    );
}

var rowRef = 1;

function addRowRef() {
    $('#refId').append('' +
        '<tr class="rowRef">\n' +
        '<td width="3%">' + rowRef++ + '</td>\n' +
        '<td width="20%"><input type="text" class="form-control"></td>\n' +
        '<td width="20%"><input type="text" class="form-control"></td>\n' +
        '<td width="20%"><input type="text" class="form-control"></td>\n' +
        '<td width="20%"><input type="text" class="form-control"></td>\n' +
        '<td width="20%"><input type="text" class="form-control"></td>\n' +
        '</tr>'
    );
}

$(window).ready(function () {
    addRowSe();
    addRowHe();
    addRowAoq();
    addRowPq();
    addRowPste();
    addRowEr();
    addRowRef();
});