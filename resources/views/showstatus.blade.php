<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>420</title>
</head>
<body>
<p align = "right"><font size = "2"><input type="button"name="longout" onclick="window.location.href='/logout'" value="ออกจากระบบ"></font></p><br>
<center><font size = "10">{{Session::get('name')}}</font></center><br>

FBS= {{$showstatus->FBS}}<br><br>
BPMIN={{$showstatus->BPmin}}<br><br>
BPMIX={{$showstatus->BPmix}}<br><br>
คำแนะนำ={{$showstatus->comment}}<br><br>
<center><font size = "2">
        @if($showstatus->FBS<100)
            <svg height="400" width="400">
                <circle cx="200" cy="200" r="180" stroke="black" stroke-width="5" fill="#F8F8FF"/>
            </svg>
            กลุ่มปกติ
        @elseif($showstatus->FBS>=100&&$showstatus->FBS<125)
            <svg height="400" width="400">
                <circle cx="200" cy="200" r="180" stroke="black" stroke-width="5" fill="#00FF00"/>
            </svg>
            กลุ่มเสี่ยง
        @elseif($showstatus->FBS>=125&&$showstatus->FBS<126)
            <svg height="400" width="400">
                <circle cx="200" cy="200" r="180" stroke="black" stroke-width="5" fill="#006600"/>
            </svg>
            กลุ่มผู้ป่วย
        @elseif($showstatus->FBS>=126&&$showstatus->FBS<=154)
            <svg height="400" width="400">
                <circle cx="200" cy="200" r="180" stroke="black" stroke-width="5" fill="#FFFF66"/>
            </svg>
            กลุ่มผู้ป่วยระดับ1
        @elseif($showstatus->FBS>=155&&$showstatus->FBS<=182)
            <svg height="400" width="400">
                <circle cx="200" cy="200" r="180" stroke="black" stroke-width="5" fill="#FFCC00"/>
            </svg>
            กลุ่มผู้ป่วยระดับ2
        @elseif($showstatus->FBS>182&&$showstatus->FBS<=183)
            <svg height="400" width="400">
                <circle cx="200" cy="200" r="180" stroke="black" stroke-width="5" fill="#660000"/>
            </svg>
            กลุ่มผู้ป่วยระดับ3
        @elseif($showstatus->FBS>183)
            <svg height="400" width="400">
                <circle cx="200" cy="200" r="180" stroke="black" stroke-width="5" fill="#003300"/>
            </svg>
            กลุ่มผู้ป่วยรุนแรง
        @endif
    </font></center><br>
</body>
</html>