$(document).ready(function () {
    $('button').on('click', function () {
        if ($('input').val().length >= 1)
        {
            var section = $(document.createElement('section'));
            var a = $(document.createElement('a'));
            var img = document.createElement("img");
            var today = new Date();
            var dd = today.getDate();
            var yyyy = today.getFullYear();
            var h = today.getHours();
            var m = today.getMinutes();
            const monthNames = ["January", "February", "March", "April", "May", "June",
                "July", "August", "September", "October", "November", "December"];
            var result = ('<br/>'+'<span>'+monthNames[today.getMonth()] + ' ' + dd + ', ' + yyyy + ' at ' + h + ':' + m+'</span>');
            img.src = "images/images2.jpg";
            var comment = $(document.createElement('p'));
            $('.cmtlist').append(section);
            $(section).append(img);
            $(section).append(a);
            $(section).append(result);
            $(section).append(comment);

            a.text($('#name').val());
            comment.text($('#comment').val());
        } else
        {
            alert('Please Enter The Informtion Corrently');
        }
    });
});