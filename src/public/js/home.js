$(function() {
    $('.check').change(function() {
        var id = $(this).parent('.list-check').prev('.todo-id').val();
        var checked = $(this).prop("checked");
        var is_completed = 0;
        if (checked) {
            is_completed = 1;
        }

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "/update",
            type: 'POST',
            data: {
                id: id,
                is_completed: is_completed
            }
        });
    });
});

$(function() {
    $('.delete').on('click', function() {
        var id = $(this).parents('.list-item').children('.todo-id').val();

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "/delete",
            type: 'POST',
            data: {
                id: id,
            },
        });

        $(this).parents('.todo_' + id).remove();
    })
})