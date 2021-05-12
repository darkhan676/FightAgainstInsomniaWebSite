var score = 0;
var total = 5;
var point = 1;
var highest = total * point;


function init() {
    sessionStorage.setItem('a1', 'a');
    sessionStorage.setItem('a2', 'a');
    sessionStorage.setItem('a3', 'a');
    sessionStorage.setItem('a4', 'a');
    sessionStorage.setItem('a5', 'a');
    sessionStorage.setItem('a6', 'a');
    sessionStorage.setItem('a7', 'a');
    sessionStorage.setItem('a8', 'a');
    sessionStorage.setItem('a9', 'a');
    sessionStorage.setItem('a10', 'a');
    sessionStorage.setItem('a11', 'a');
    sessionStorage.setItem('a12', 'a');
    sessionStorage.setItem('a13', 'a');
    sessionStorage.setItem('a14', 'a');
    sessionStorage.setItem('a15', 'a');
    sessionStorage.setItem('a16', 'a');
    sessionStorage.setItem('a17', 'a');
    sessionStorage.setItem('a18', 'a');
    sessionStorage.setItem('a19', 'a');
    sessionStorage.setItem('a20', 'a');

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
        $('#q7').fadeIn(300);
        return false;
    });
    $('#q7 #submit').click(function () {
        $('.questionForm').hide();
        process("q7");
        $('#q8').fadeIn(300);
        return false;
    });
    $('#q8 #submit').click(function () {
        $('.questionForm').hide();
        process("q8");
        $('#q9').fadeIn(300);
        return false;
    });
    $('#q9 #submit').click(function () {
        $('.questionForm').hide();
        process("q9");
        $('#q10').fadeIn(300);
        return false;
    });
    $('#q10 #submit').click(function () {
        $('.questionForm').hide();
        process("q10");
        $('#q11').fadeIn(300);
        return false;
    });
    $('#q11 #submit').click(function () {
        $('.questionForm').hide();
        process("q11");
        $('#q12').fadeIn(300);
        return false;
    });
    $('#q12 #submit').click(function () {
        $('.questionForm').hide();
        process("q12");
        $('#q13').fadeIn(300);
        return false;
    });
    $('#q13 #submit').click(function () {
        $('.questionForm').hide();
        process("q13");
        $('#q14').fadeIn(300);
        return false;
    });
    $('#q14 #submit').click(function () {
        $('.questionForm').hide();
        process("q14");
        $('#q15').fadeIn(300);
        return false;
    });
    $('#q15 #submit').click(function () {
        $('.questionForm').hide();
        process("q15");
        $('#q16').fadeIn(300);
        return false;
    });
    $('#q16 #submit').click(function () {
        $('.questionForm').hide();
        process("q16");
        $('#q17').fadeIn(300);
        return false;
    });
    $('#q17 #submit').click(function () {
        $('.questionForm').hide();
        process("q17");
        $('#q18').fadeIn(300);
        return false;
    });
    $('#q18 #submit').click(function () {
        $('.questionForm').hide();
        process("q18");
        $('#q19').fadeIn(300);
        return false;
    });
    $('#q19 #submit').click(function () {
        $('.questionForm').hide();
        process("q19");
        $('#q20').fadeIn(300);
        return false;
    });
    $('#q20 #submit').click(function () {
        $('.questionForm').hide();
        process("q20");
        $('#results').fadeIn(300);
        return false;
    });
});
// process

function process(q) {
    if (q == "q1") {
        var submitted = $('input[name=q1]:checked').val();
        if (submitted == sessionStorage.a1) {
            score++;
        }
    }
    if (q == "q2") {
        var submitted = $('input[name=q2]:checked').val();
        if (submitted == sessionStorage.a2) {
            score++;
        }
    }
    if (q == "q3") {
        var submitted = $('input[name=q3]:checked').val();
        if (submitted == sessionStorage.a3) {
            score++;
        }
    }
    if (q == "q4") {
        var submitted = $('input[name=q4]:checked').val();
        if (submitted == sessionStorage.a4) {
            score++;
        }
    }
    if (q == "q5") {
        var submitted = $('input[name=q5]:checked').val();
        if (submitted == sessionStorage.a5) {
            score++;
        }
    }
    if (q == "q6") {
        var submitted = $('input[name=q6]:checked').val();
        if (submitted == sessionStorage.a6) {
            score++;
        }
    }
    if (q == "q7") {
        var submitted = $('input[name=q7]:checked').val();
        if (submitted == sessionStorage.a7) {
            score++;
        }
    }
    if (q == "q8") {
        var submitted = $('input[name=q8]:checked').val();
        if (submitted == sessionStorage.a8) {
            score++;
        }
    }
    if (q == "q9") {
        var submitted = $('input[name=q9]:checked').val();
        if (submitted == sessionStorage.a9) {
            score++;
        }
    }
    if (q == "q10") {
        var submitted = $('input[name=q10]:checked').val();
        if (submitted == sessionStorage.a10) {
            score++;
        }
    }
    if (q == "q11") {
        var submitted = $('input[name=q11]:checked').val();
        if (submitted == sessionStorage.a11) {
            score++;
        }
    }
    if (q == "q12") {
        var submitted = $('input[name=q12]:checked').val();
        if (submitted == sessionStorage.a12) {
            score++;
        }
    }
    if (q == "q13") {
        var submitted = $('input[name=q13]:checked').val();
        if (submitted == sessionStorage.a13) {
            score++;
        }
    }
    if (q == "q14") {
        var submitted = $('input[name=q14]:checked').val();
        if (submitted == sessionStorage.a14) {
            score++;
        }
    }
    if (q == "q15") {
        var submitted = $('input[name=q15]:checked').val();
        if (submitted == sessionStorage.a15) {
            score++;
        }
    }
    if (q == "q16") {
        var submitted = $('input[name=q16]:checked').val();
        if (submitted == sessionStorage.a16) {
            score++;
        }
    }
    if (q == "q17") {
        var submitted = $('input[name=q17]:checked').val();
        if (submitted == sessionStorage.a17) {
            score++;
        }
    }
    if (q == "q18") {
        var submitted = $('input[name=q18]:checked').val();
        if (submitted == sessionStorage.a18) {
            score++;
        }
    }
    if (q == "q19") {
        var submitted = $('input[name=q19]:checked').val();
        if (submitted == sessionStorage.a19) {
            score++;
        }
    }
    if (q == "q20") {
        var submitted = $('input[name=q20]:checked').val();
        if (submitted == sessionStorage.a20) {
            score++;
        }
        $('#results').html('<h3>Your final score is: ' + score + ' out of 20</h3> At the bottom there is a table evaluating your level of insomnia <br> If your score is: <br> from 0-7 - severe stage of insomnia. Do you need medical help <br> from 7-15 - you have an early stage of insomnia, you can be treated with our wonderful music from <br> 15-20 - you do not suffer from insomnia, try to take a little rest from everything');
    }
}
window.addEventListener('load', init, false);
