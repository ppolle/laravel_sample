<?php
{{ $message }}

<ol>

@foreach($users as $user)
		<li>
			<ul>
				<li>Name: {{ $user->fname }}</li>
				<li>Phone: {{ $user->mname }}</li>
				<li>Email: {{ $user->lname }}</li>
			</ul>

		</li>

@endforeach

</ol>