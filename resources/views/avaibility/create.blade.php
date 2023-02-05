<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{asset('assets/admin/assets/css/mark.css')}}" rel="stylesheet">
    <title>Talk To Toppers</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    />
</head>
<form  action = "{{route('avaibility.store')}}"  method="POST">
    @csrf
    <div class="">
        <div class="title">
            <p>Mark Availability</p>
        </div>
        <div class="Availability">
            <div class="topsection">
                <div class="d-flex align-items-center gap-4 calander">
                    <img src="{{asset('assets/admin/assets/img/calander.svg')}}" alt="">
                    <p>Calendar</p>
                </div>
                <div class="date">
                    <p>{{$date}}</p>
                </div>
            </div>
            <div class="time">
                <p><span><img src="{{asset('assets/admin/assets/img/clock.svg')}}" alt=""></span>Time</p>
                <div id="add_more">
                    @php
                    $count = 0;
                    @endphp

                    @if(!$avaibilities->isEmpty())
                    @foreach($avaibilities as $avaibility)
                    <div class="timeselection d-flex align-items-center justify-content-between" id="{{$count}}">
                        <input type="time" step="hh:mm" name="data[{{$count}}][start_time]" step="hh:mm" value="{{$avaibility->start_time}}" class="start_time" placeholder="01:30 pm">
                        <input type="time"step="hh:mm" name="data[{{$count}}][end_time]" class="end_time" value="{{$avaibility->end_time}}" placeholder="01:30 pm"  readonly="">
                        <input type="hidden" value="{{$date}}" name="data[{{$count}}][date]">
                        <input type="hidden" name="data[{{$count}}][avaibility_id]" value="{{$avaibility->id}}">
                        <select name="data[{{$count}}][availability]" id="Availability">
                            <option value="available" {{$avaibility->availability == 'available' ? 'selected' : ''}}>Available</option>
                            <option value="not_available" {{$avaibility->availability == 'not_available' ? 'selected' : ''}}>Not-Available</option>
                        </select>
                    </div>
                        @php
                            $count = $count+1;
                        @endphp
                    @endforeach
                    @else
                        <div class="timeselection d-flex align-items-center justify-content-between" id="0">
                            <input type="time" step="hh:mm" name="data[0][start_time]" step="hh:mm" class="start_time" placeholder="01:30 pm">
                            <input type="time"step="hh:mm" name="data[0][end_time]" class="end_time" placeholder="01:30 pm"  readonly="">
                            <input type="hidden" value="{{$date}}" name="data[0][date]">
                            <select name="data[0][availability]" id="Availability">
                                <option value="available">Available</option>
                                <option value="not_available">Not-Available</option>
                            </select>
                        </div>
                    @endif
                </div>


                <button class="timebtn">Add More</button>
            </div>
            <button class="submitbtn" type="submit">Submit</button>
        </div>
    </div>
</form>
<script type="text/javascript">
    function addmore(id){
        id = id+1;
        id = parseInt(id);
        var html = `
                <div class="timeselection d-flex align-items-center justify-content-between" id="${id}">
                    <input type="time" step="hh:mm" name="data[${id}][start_time]" class="start_time" placeholder="01:30 pm">
                    <input type="time"step="hh:mm" class="end_time" name="data[${id}][end_time]" placeholder="01:30 pm" readonly="">
<input type="hidden" value="{{$date}}" name="data[${id}][date]">
                    <select name="data[${id}][availability]" id="Availability">
                        <option value="available">Available</option>
                        <option value="not_available">Not-Available</option>
                    </select>
                </div>
        `;

                $('#add_more').append(html);


    }
    $(".timebtn").click(function(e){
        e.preventDefault();
       // console.log($('.timeselection').last().attr('id'));
        addmore($('.timeselection').last().attr('id'));
    });

    function formatDate(date) {
        return (
            [
                date.getFullYear(),
                padTo2Digits(date.getMonth() + 1),
                padTo2Digits(date.getDate()),
            ].join('-') +
            ' ' +
            [
                padTo2Digits(date.getHours()),
                padTo2Digits(date.getMinutes()),
                // padTo2Digits(date.getSeconds()),  // 👈️ can also add seconds
            ].join(':')
        );
    }
    function padTo2Digits(num) {
        return num.toString().padStart(2, '0');
    }
    3



        $(document).on('change', '.start_time', function() {

        var time = $(this).val();
        var date1 = "{{ $date }}";
        date1 = date1.split("-");
        time = time.split(":");
        var date = new Date(date1[0],date1[1]-1,date1[2],time[0],time[1]); // 4:55
         date.setHours(date.getHours() + 1);
        date3 = date.getMinutes();
        date2 = date.getHours();
        var el = $(this).siblings('.end_time')[0];
        console.log(date2+':'+date3);
        const [date6, time5] = formatDate(date).split(' ');
        el.value = time5;
    });


</script>
