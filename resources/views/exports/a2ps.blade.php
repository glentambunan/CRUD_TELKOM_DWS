<table>
    <thead>
    <tr>
                                            <th>SOURCE</th>
                                            <th>ASAL</th>
                                            <th>COSTUMER</th>
                                            <th>SMSC</th>
                                            <th>LINK</th>
                                            <th>OPERATOR</th>
                                            <th>SENDER</th>
                                            <th>TERMINASI</th>
                                            <th>TIPE TERMINASI</th>
                                            <th>SID</th>
                                            <th>STATUS TERMINASI</th>
    </tr>
    </thead>
    <tbody>
    @foreach($a2ps as $a2p)
        <tr>
                                            <td>{{$a2p->source}}</td>
                                            <td>{{$a2p->asal}}</td>
                                            <td>{{$a2p->costumer}}</td>
                                            <td>{{$a2p->SMSC}}</td>
                                            <td>{{$a2p->link}}</td>
                                            <td>{{$a2p->operator}}</td>
                                            <td>{{$a2p->sender}}</td>
                                            <td>{{$a2p->terminasi}}</td>
                                            <td>{{$a2p->tipe_terminasi}}</td>
                                            <td>{{$a2p->SID}}</td>
                                            <td>{{$a2p->status_terminasi}}</td>
        </tr>
    @endforeach
    </tbody>
</table>

