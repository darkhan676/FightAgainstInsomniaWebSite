var score = 0;
var total = 5;
var point = 1;
var highest = total * point;

function init() {
    sessionStorage.setItem('a1a', 'a')
    sessionStorage.setItem('a1b', 'b');
    sessionStorage.setItem('a1c', 'c');
    sessionStorage.setItem('a1d', 'd');
    sessionStorage.setItem('a1e', 'e');


    sessionStorage.setItem('a2a', 'a');
    sessionStorage.setItem('a2b', 'b');
    sessionStorage.setItem('a2c', 'c');
    sessionStorage.setItem('a2d', 'd');
    sessionStorage.setItem('a2e', 'e');

    sessionStorage.setItem('a3a', 'a');
    sessionStorage.setItem('a3b', 'b');
    sessionStorage.setItem('a3c', 'c');
    sessionStorage.setItem('a3d', 'd');
    sessionStorage.setItem('a3e', 'e');

    sessionStorage.setItem('a4a', 'a');
    sessionStorage.setItem('a4b', 'b');
    sessionStorage.setItem('a4c', 'c');
    sessionStorage.setItem('a4d', 'd');
    sessionStorage.setItem('a4e', 'e');

    sessionStorage.setItem('a5a', 'a');
    sessionStorage.setItem('a5b', 'b');
    sessionStorage.setItem('a5c', 'c');
    sessionStorage.setItem('a5d', 'd');
    sessionStorage.setItem('a5e', 'e');

    sessionStorage.setItem('a6a', 'a');
    sessionStorage.setItem('a6b', 'b');
    sessionStorage.setItem('a6c', 'c');
    sessionStorage.setItem('a6d', 'd');
    sessionStorage.setItem('a6e', 'e');

}

$(document).ready(function () {
    //Hide all questions
    $('.questionForm').hide();

    //Show first

    $('#q1').show();

    $('#q1 #submit').click(function () {
        $('.questionForm').hide();
        process("q1");
        $('#q2').fadeIn(300);
        return false;
    });
    $('#q2 #submit').click(function () {
        $('.questionForm').hide();
        process("q2");
        $('#q3').fadeIn(300);
        return false;
    });
    $('#q3 #submit').click(function () {
        $('.questionForm').hide();
        process("q3");
        $('#q4').fadeIn(300);
        return false;
    });
    $('#q4 #submit').click(function () {
        $('.questionForm').hide();
        process("q4");
        $('#q5').fadeIn(300);
        return false;
    });
    $('#q5 #submit').click(function () {
        $('.questionForm').hide();
        process("q5");
        $('#q6').fadeIn(300);
        return false;
    });
    $('#q6 #submit').click(function () {
        $('.questionForm').hide();
        process("q6");
        $('#results').fadeIn(300);
        return false;
    });

});
// process
function process(q) {
    if (q == "q1") {
        var submitted = $('input[name=q1]:checked').val();
        if (submitted == sessionStorage.a1a) {
            score += 5;
        }
        if (submitted == sessionStorage.a1b) {
            score += 4;
        }
        if (submitted == sessionStorage.a1c) {
            score += 3;
        }
        if (submitted == sessionStorage.a1d) {
            score += 2;
        }
        if (submitted == sessionStorage.a1e) {
            score += 1;
        }

    }
    if (q == "q2") {
        var submitted = $('input[name=q2]:checked').val();
        if (submitted == sessionStorage.a2a) {
            score += 5;
        }
        if (submitted == sessionStorage.a2b) {
            score += 4;
        }
        if (submitted == sessionStorage.a2c) {
            score += 3;
        }
        if (submitted == sessionStorage.a2d) {
            score += 2;
        }
        if (submitted == sessionStorage.a2e) {
            score += 1;
        }
    }
    if (q == "q3") {
        var submitted = $('input[name=q3]:checked').val();
        if (submitted == sessionStorage.a3a) {
            score += 5;
        }
        if (submitted == sessionStorage.a3b) {
            score += 4;
        }
        if (submitted == sessionStorage.a3c) {
            score += 3;
        }
        if (submitted == sessionStorage.a3d) {
            score += 2;
        }
        if (submitted == sessionStorage.a3e) {
            score += 1;
        }
    }
    if (q == "q4") {
        var submitted = $('input[name=q4]:checked').val();
        if (submitted == sessionStorage.a4a) {
            score += 5;
        }
        if (submitted == sessionStorage.a4b) {
            score += 4;
        }
        if (submitted == sessionStorage.a4c) {
            score += 3;
        }
        if (submitted == sessionStorage.a4d) {
            score += 2;
        }
        if (submitted == sessionStorage.a4e) {
            score += 4;
        }
    }
    if (q == "q5") {
        var submitted = $('input[name=q5]:checked').val();
        if (submitted == sessionStorage.a5a) {
            score += 5;
        }
        if (submitted == sessionStorage.a5b) {
            score += 4;
        }
        if (submitted == sessionStorage.a5c) {
            score += 3;
        }
        if (submitted == sessionStorage.a5d) {
            score += 2;
        }
        if (submitted == sessionStorage.a5e) {
            score += 1;
        }
    }
    if (q == "q6") {
        var submitted = $('input[name=q6]:checked').val();
        if (submitted == sessionStorage.a6a) {
            score += 5;
        }
        if (submitted == sessionStorage.a6b) {
            score += 4;
        }
        if (submitted == sessionStorage.a6c) {
            score += 3;
        }
        if (submitted == sessionStorage.a6d) {
            score += 2;
        }
        if (submitted == sessionStorage.a6e) {
            score += 1;
        }

        $('#results').html('<h3>Your final score is: ' + score + ' out of 30</h3> A score of 22 points and above is the norm,<br> 19-21 points is a borderline result, just chill with our music <br> less than 19 points is a sign of the presence of insomnia.');
    }
}
window.addEventListener('load', init, false);