<style>
    *{font-familyt:'Raleway',sans-serif;}
    .container{
        margin-left:15px;
        margin-right:15px;
    }
    .message-section{
        background:#fff;
        box-shadow: 0 5px 8px 0 rgba(0,0,0,0.2);
    }
</style>
<div class="container">
    <div class="message-section">
        <p><strong>Message from: </strong>{{ $email }} ({{ $name }})</p>
        <p><strong>Subject:</strong><br>
            {{ $subject }}
        </p>
        <p><strong>Message:</strong><br>
            {{ $messages }}
        </p>
    </div>
</div>
