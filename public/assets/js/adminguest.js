$(document).ready(function(){
    hideOtherCity()
})
function hideOtherCity(){
    const province = $("#province option:selected").val();
    $("#city option").each(function() {
        const option = $(this).val();
        if (option.startsWith(province)) {
            if (option.startsWith('01', 2)) {
                $(this).attr('selected','true')
            }
            $(this).show()
        } else {
            $(this).hide()
        }
    });
}