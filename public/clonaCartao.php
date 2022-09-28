<div class="c-loader"></div>

<audio id="myAudio">
    <source src="sound.mp3" type="audio/mpeg">
</audio>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

<script>
    $(function() {
        $('body').click(function(e) {
            document.querySelector("audio").play()
        })
    })
</script>

<style>
    body {
        align-items: center;
        display: flex;
        justify-content: center;
        min-height: 100vh;
    }

    .c-loader {
        animation: is-rotating 1s infinite;
        border: 6px solid #e5e5e5;
        border-radius: 50%;
        border-top-color: #51d4db;
        height: 50px;
        width: 50px;
    }

    @keyframes is-rotating {
        to {
            transform: rotate(1turn);
        }
    }
</style>
