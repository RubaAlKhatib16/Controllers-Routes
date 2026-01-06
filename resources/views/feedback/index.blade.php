<h2>Feedback List</h2>

@foreach($feedbacks as $fb)
   <p>Name: {{ $fb['name'] }}</p>
   <p>Message: {{ $fb['message'] }}</p>
   <hr>
@endforeach
