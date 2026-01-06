<form method="POST" action="{{ route('contact.store') }}">
    @csrf

    <input type="text" name="name" placeholder="Name">
    <input type="email" name="email" placeholder="Email">
    <textarea name="message" placeholder="Message"></textarea>

    <button type="submit">Send</button>
</form>
