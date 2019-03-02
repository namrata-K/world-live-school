/* Using AJAX for saving to database has no point (page reload is a must)
* but app uses div for adding a todo, and not the form with submit button
*/
function submit_todo() {
    var todo = $('.input-box').val();
    if (!todo)
        return;
    var str = "todo="+todo;
    $.ajax({
        type: "POST",
        url: "save_todo.php",
        data: str,
        cache: false,
        success: function() {
            location.reload();
        }
    });
    $('.input-box').val('');
}
$(function() {

    $('.post').click(function() {
        submit_todo();
    });
    $('.input-box').keypress(function (e) {
        if (e.which == 13)
            submit_todo();
    });
    $('.todo').last().css("border","none");

    $('.todo').dblclick(function() {
        id = $(this).attr('class').split(' ')[1];
        str = "id=" + id;
        $.ajax({
            type: "POST",
            url: "remove.php",
            data: str,
            success: function(result) {
            }
        });
        $(this).remove();
    });
});
