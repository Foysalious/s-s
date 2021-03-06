@component('mail::message')
<h1> Reservation Success</h1>

<div>
    <h3>
        <b>
            Name
        </b>
    </h3>
    <p>{{ $reservation['name'] }}</p>
</div>

<div>
    <h3>
        <b>
            Email Address:
        </b>
    </h3>
    <p>{{ $reservation['email'] }}</p>
</div>

<div>
    <h3>
        <b>
            Phone Number
        </b>
    </h3>
    <p>{{ $reservation['phone'] }}</p>
</div>

<div>
    <h3>
        <b>
            Reservation Date
        </b>
    </h3>
    <p>{{ $reservation['booking_date'] }}</p>
</div>

<div>
    <h3>
        <b>
            Reservation Time
        </b>
    </h3>
    <p>{{ $reservation['booking_time'] }}</p>
</div>

<div>
    <h3>
        <b>
            Unique Code
        </b>
    </h3>
    <p>{{ $reservation['random'] }}</p>
    
</div>


@endcomponent
