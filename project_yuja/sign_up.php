<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel = "stylesheet" href="sign_up.css">
  <title>sign_up</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="input-form-backgroud row">
      <div class="input-form col-md-12 mx-auto">
        <h4 class="mb-3">회원가입</h4>
        <form class="validation-form" name = "sign_up" method="post" action="insert.php">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="name">이름</label>
              <input type="text" class="form-control" name = "name" id="name" placeholder="" value="" required>
              <div class="invalid-feedback">
                이름을 입력해주세요.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="nickname">닉네임</label>
              <input type="text" class="form-control" name = "nickname" id="nickname" placeholder="" value="" required>
              <div class="invalid-feedback">
                닉네임을 입력해주세요.
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="email">이메일</label>
            <input type="email" class="form-control" name = "email" id="email" placeholder="you@example.com" required>
            <div class="invalid-feedback">
              이메일을 입력해주세요.
            </div>
          </div>

          <div class="mb-3">
            <label for="pass">비밀번호</label>
            <input type="password" class="form-control" name = "pass" id="password" placeholder="password" required>
            <div class="invalid-feedback">
              비밀번호를 입력해주세요.
            </div>
          </div>

          <!-- <div class="mb-3">
            <label for="pass_check">비밀번호 확인</label>
            <input type="password" class="form-control" name = "pass_check" id="password" placeholder="password" required>
            <div class="invalid-feedback">
              비밀번호를 확인해주세요.
            </div>
          </div> -->

          <div class="mb-3">
            <label for="address">주소</label>
            <input type="text" class="form-control" name = "address" id="address" placeholder="서울특별시 강남구" required>
            <div class="invalid-feedback">
              주소를 입력해주세요.
            </div>
          </div>

          <div class="mb-3">
            <label for="address2">상세주소<span class="text-muted">&nbsp;(필수 아님)</span></label>
            <input type="text" class="form-control" name = "address2" id="address2" placeholder="상세주소를 입력해주세요.">
          </div>

          <hr class="mb-4">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="aggrement" required>
            <label class="custom-control-label" for="aggrement">개인정보 수집 및 이용에 동의합니다.</label>
          </div>
          <div class="mb-4"></div>
          <button class="btn btn-primary btn-lg btn-block" type="submit" id = sign onclick="check_input()">가입 완료</button>
        </form>
      </div>
    </div>
    <footer  class="my-3 text-center text-small">
      <a href = "index.php"><img src = "./img/logo_2.png" width ="100rem"></a>
    </footer>
  </div>
  <script>
    window.addEventListener('load', () => {
      const forms = document.getElementsByClassName('validation-form');

      Array.prototype.filter.call(forms, (form) => {
        form.addEventListener('submit', function (event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }

          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  </script>
</body>
</html>
