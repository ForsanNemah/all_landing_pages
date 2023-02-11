function load_data() {
   // Show loader
$('#loader').removeClass('d-none')
    // Selecting the table Element
var table = $('#table-list')
    // Emptying the Table items
table.find('tbody').html('')
setTimeout(() => {
    $.ajax({
        // JSON FILE URL
        url: 'assets/json/projects-api.json',
        // Type of Return Data
        dataType: 'json',
        // Error Function
        error: err => {
            console.log(err)
            alert("An error occured")
            $('#loader').addClass('d-none')
        },
        // Succes Function
        success: function(resp) {
            if (resp.length > 0) {
                // If returned json data is not empty
                var i = 1;
                // looping the returned data
                Object.keys(resp).map(k => {
                    // creating new table row element
                    var tr = $('<tr>')
                        // first column data
                    tr.append('<td class="py-2 px-2 text-center">' + (i++) + '</td>')
                        // second column data
                    tr.append('<td class="py-2 px-2">' + resp[k].name + '</td>')
                        // third column data
                    tr.append('<td class="py-2 px-2">' + resp[k].client + '</td>')
                        // fourth column data
                    tr.append('<td class="py-2 px-2">' + resp[k].person_contact + '</td>')
                        // fifth column data
                    tr.append('<td class="py-2 px-2">' + resp[k].year + '</td>')
                        // sixth column data
                    tr.append('<td class="py-2 px-2">' + resp[k].status + '</td>')
// seventh column data
tr.append('<td class="py-1 px-2">' + resp[k].detail + '</td>')
// 8 column data
tr.append('<td class="py-1 px-2"><a href="#" target="_blank" onclick="downloadfile(' +"'" +resp[k].file_name.toString()+"'" +') ;" >view</a></td>')

                    // Append table row item to table body
                    table.find('tbody').append(tr)
                })
            } else {
                // If returned json data is empty
                var tr = $('<tr>')
                tr.append('<th class="py-1 px-2 text-center">No data to display</th>')
                table.find('tbody').append(tr)
            }
            $('#loader').addClass('d-none')
        }
    })
}, 500)
}
// ==========
function downloadfile(path)
{

// e.preventDefault();
window.location.href=path;
}
// ==========
$(function() {
// Hide loader on document ready
$('#loader').addClass('d-none')
setTimeout(() => {
        load_data()
    }, 200)
    // Reload Button Function
$('#reload_data').click(function() {
    // refreshing the table data
    load_data()
})
})
