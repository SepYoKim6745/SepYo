<html>
<head>
    <meta charset="utf-8">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <h1>설문조사</h1>
    <form name="form1" method="post" action="plus_7_2_print.php">
      <fieldset>
         <legend>성별과 나이를 입력하세요.</legend>
         성별 : <input type="radio" name="gender" value="남">&nbsp;남
         &nbsp;<input type="radio" name="gender" value="여">&nbsp;여 <br>
         나이 : <input type="text" name="age">
      </fieldset>
      <fieldset>
         <legend>평소 좋아하는 음식을 선택하세요.(1개 이상)</legend>
         <input type="checkbox" name="menu[]" value="한식">한식&nbsp;
         <input type="checkbox" name="menu[]" value="중식">중식&nbsp;
         <input type="checkbox" name="menu[]" value="일식">일식&nbsp;
         <input type="checkbox" name="menu[]" value="양식">양식&nbsp;
      </fieldset>

      <fieldset>
         <legend>다음 문항에 대해 5점 척도로 답하세요.</legend>
         본 식당의 위치는 만족스러운가? 1<input type="range" value="3" min="1" max="5"  name="v1">5 <br>
         본 식당의 서비스는 만족스러운가? 1<input type="range" value="3" min="1" max="5" name="v2">5 <br>
         본 식당의 가격은 적당한가? 1<input type="range" value="3" min="1" max="5" name="v3">5 <br>

      </fieldset>

      기타 의견 사항<br>
      <textarea rows="5" cols="30" name="content">의견을 달아주세요!</textarea><br>
      <input type="submit" value="확인">
      <input type="reset" value="취소">

      
    </form>
  </body>
  </html>