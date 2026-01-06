<h2>Contact Us</h2>

<form method="POST" action="{{ route('contact.store') }}">
    @csrf

    <label>Name:</label>
    <input type="text" name="name">

    <br>

    <label>Email:</label>
    <input type="email" name="email">

    <br>

    <label>Message:</label>
    <textarea name="message"></textarea>

    <br>

    <button type="submit">Send</button>
</form>
