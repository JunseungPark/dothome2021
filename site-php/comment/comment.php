<?php 
    include "../connect/connect.php";
    include "../connect/session.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>댓글페이지</title>
    <!-- style -->
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/var.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

    <div id="skip">
        <a href="#contents">컨텐츠 바로가기</a>
        <a href="#footer">푸터 바로가기</a>
    </div>
    <!-- //skip -->
    
    <header id="header"> 
        <?php
            include "../include/header.php";
        ?>
    </header>
    <!-- //header -->
    <main id="contents">
        <section id="mainCont">
            <h2 class="ir_so">메인 컨텐츠</h2>
            <article class="content-article">
                <section class="cardType">
                    <div class="cardType01">
                        <h2>EPL 팀 소개</h2>
                        <p>English Premier League에 소속된 팀들을 소개하며 각 팀에 대한 역사와 정보를 한 눈에 알아 볼 수 있는 사이트입니다.</p>
                        <div class="card-wrap">
                            <div class="card">
                                <a href="#">
                                    <img src="http://dpfwl8745.dothome.co.kr/wireframe/img/card01.jpg" alt="Arsenal을 소개하는 이미지입니다." class="card-img">
                                    <strong class="card-title">Arsenal</strong>
                                    <span class="card-desc">아스널 풋볼 클럽은 런던을 연고지로 홀로웨이의 에미레이츠 스타디움을 홈구장으로 하는 잉글랜드의 축구 클럽이다.
                                    </span>
                                    <span class="card-keyword">
                                        <span>#과학</span>
                                        <span>#구너</span>
                                    </span>
                                </a>
                            </div>
                            <div class="card">
                                <a href="#">
                                    <img src="http://dpfwl8745.dothome.co.kr/wireframe/img/card02.jpg" alt="Leicester 소개하는 이미지입니다." class="card-img">
                                    <strong class="card-title">Leicester</strong>
                                    <span class="card-desc">레스터 시티 풋볼 클럽은 레스터를 연고지로 을 연고지로 하는 프로 축구 구단이다.</span>
                                    <span class="card-keyword">
                                        <span>#여우</span>
                                        <span>#기적</span>
                                    </span>
                                </a>
                            </div>
                            <div class="card">
                                <a href="#">
                                    <img src="http://dpfwl8745.dothome.co.kr/wireframe/img/card03.jpg" alt="Tottenham Hotspur를 소개하는 이미지입니다." class="card-img">
                                    <strong class="card-title">Tottenham Hotspur</strong>
                                    <span class="card-desc">토트넘 홋스퍼 FC는 잉글랜드 북런던 토트넘을 연고지로 하는 프로 축구 구단이다. </span>
                                    <span class="card-keyword">
                                        <span>#손흥민</span>
                                        <span>#닭집</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            <!-- CardType01 -->
            </article>

            <article class="flow-article">
                <h3 class="ir_so">의견남기기</h3>
                <section id="comment" class="section-comment">
                    <h4>의견</h4>
                    <p>당신의 의견을 남겨주세요</p>
                    <div class="comment-form">
                    <form action="commentSave.php" method="post" name="comment">
                            <fieldset>
                                <legend class="ir_so">댓글 영역</legend>
                                <div class="comment-wrap">
                                    <div>
                                        <label for="youName" class="ir_so">이름</label>
                                        <input type="text" name="youName" id="youName" class="input_write2" placeholder="이름" autocomplete="off" maxlength="10" required="">
                                    </div>
                                    <div>
                                        <label for="youText" class="ir_so">신청하기</label>
                                        <input type="text" name="youText" id="youText" class="input_write2 w100" placeholder="의견을 적어주세요!" autocomplete="off" required="">
                                    </div>
                                    <button class="btn_submit2" type="submit" value="신청하기">go</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="comment-list">
                        <?php
                            include "../connect/connect.php";

                            $sql = "SELECT * FROM myComment LIMIT 10";
                            $result = $connect -> query($sql);

                            while($info = mysqli_fetch_array($result)) {
                        ?>
                            <div>
                                <p><?=$info['youText']?></p>
                                <div class="icon">
                                    <img src="" alt="">
                                    <span><?=$info['youName']?></span>
                                    <span><?=date('y-m-d H:i', $info['regTime'])?></span>
                                </div>
                            </div>
                        <?php
                            }
                        ?>
                    </div>
            <article>
        </section>
    </main>
    <!-- //contents -->

    <footer id="footer">
        footer
    </footer>
    <!-- //footer -->
</body>
</html>