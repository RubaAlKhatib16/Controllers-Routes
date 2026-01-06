<h2>Add Feedback</h2>

<form method="POST" action="{{ route('feedback.store') }}">
    @csrf

    <label>Name:</label>
    <input type="text" name="name">

    <br>

    <label>Message:</label>
    <textarea name="message"></textarea>

    <br>

    <button type="submit">Send</button>
</form>

<!--
في هذا الجزء قمت باستخدام Resource Controller في Laravel.
عند تعريف Route::resource يقوم Laravel بإنشاء مجموعة من المسارات تلقائيًا بحيث تربط بين المسارات القياسية وبين الدوال داخل الكنترولر، مثل index و create و store.
كما يقوم Laravel بتوليد أسماء لهذه المسارات مثل feedback.index و feedback.store حتى يسهل استخدامها داخل الواجهات بدون الحاجة لاستخدام روابط نصية ثابتة.

تعتبر الـ Resource Controllers مفيدة جدًا في الحالات التي نتعامل فيها مع CRUD كامل، لأنها توفر وقتًا كبيرًا وتنظم الكود.
بينما في الصفحات العادية أو عندما تكون العمليات محدودة، فإن استخدام الكنترولر العادي يكون أبسط وأنسب.
-->