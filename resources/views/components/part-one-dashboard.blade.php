<div class="part part-one active">
    <table>
        <tr>
            <th colspan="2">Profile</th>
        </tr>
        <tr>
            <td>Name:</td>
            <td>{{$name}}</td>
        </tr>
        <tr>
            <td>Username:</td>
            <td>{{$slug}}</td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>{{$email}}</td>
        </tr>
        <tr>
            <td>Phone:</td>
            <td>{{$phone_no}}</td>
        </tr>
        <tr>
            <td>Referral Link:</td>
            <td><a href="{{route('register')."?ref=".$slug}}">{{route('register')."?ref=".$slug}}</a></td>
        </tr>
    </table>
</div> <br>
