$(document).ready(function() {
    let table = $('#userTable').DataTable();

    $('#userTable tbody').on( 'click', 'tr', function () {
        $(this).toggleClass('selected');
    } );

    $('#userTable').click( function () {
        // alert( table.rows('.selected').data().length +' row(s) selected' );
    } );
} );
function deleteUsersSelected() {
    let rows = $('#userTable tbody tr.selected');
    let data = [];
    console.log(rows)
    if (rows!=null){
        for (i=0;i<rows.length;i++){
            data.push(rows[i].cells[0].innerHTML);
        }
        $.ajax({
            url: 'http://localhost/admin/users',
            type: 'delete',
            data: {'data':data},
            success: function () {
                console.log('ok');
                rows.remove();
            },
            error: function (error) {
                console.log(error);
            }
        })
    }
    console.log(data)
}
function addNewUser() {
    console.log($('#userTable tbody tr.selected'));
}

