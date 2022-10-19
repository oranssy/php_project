<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인 : 휴대전화로 비밀번호 찾기</title>

    <?php include "../include/link.php" ?>
</head>
<body>
    <!-- 비밀번호 찾기 팝업 (휴대전화) -->
    <div class="findPW__popup">
        <div class="findPW__inner">
            <div class="findPW__header">
                <h3>아이디·비밀번호 찾기</h3>
            </div>
            <div class="find__btn">
                <a class="findID__btn" href="find_ID.php">아이디</a></li>
                <a class="findPW__btn active" href="find_PW.php">비밀번호</a></li>
            </div>
            <div class="findPW__contents">
                <p class="findPW__desc">
                    회원님의 휴대전화 번호와 이름을 입력해주세요.
                </p>
                <form name="findPWbyPhone" action="find_PWbyPhoneSave.php" method="post">
                  <fieldset>
                      <legend>비밀번호 찾기 입력폼</legend>
                      <div class="input_and_button">
                            <label for="youPhone">휴대전화</label>
                            <input type="tel" name="youPhone" id="youPhone" placeholder="휴대전화 (- 포함)" class="input__style" required>
                      </div>
                      <div class="input_and_button">
                            <label for="youName">이름</label>
                            <input type="text" name="youName" id="youName" placeholder="이름" class="input__style" required>
                      </div>
                      <button type="submit" class="input__button">비밀번호 찾기</button>
                  </fieldset>
                </form>
            </div>
            <div class="findPW__footer">
                <ul class="desc">
                    <li>지구ON</li>
                </ul>
                <a href="../main/main.php" class="btn-home" onClick="location.href('../main/main.php')"><span>닫기</span></a>
            </div>
        </div>
    </div>
</body>

<!-- script -->
<script src="../assets/js/custom.js"></script>
</html>

