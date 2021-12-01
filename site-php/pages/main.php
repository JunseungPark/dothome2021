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
    <title>메인페이지</title>

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
                <?php
                // echo "<pre>";
                // var_dump($_SESSION);
                // echo "</pre>";
                ?>
                <h3>EPL 팀 소개</h3>
                <p>English Premier League에 소속된 팀들을 소개하며 각 팀에 대한 역사와 정보를 한 눈에 알아 볼 수 있는 사이트입니다.</p>
                <section class="section-card">
                    <h4 class="ir_so">카드 컨텐츠</h4>
                    <ul class="card-list">
                        <li>
                            <a href="#">
                                <img src="../assets/img/card01.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>Arsenal</strong>
                                <span>아스널 풋볼 클럽은 런던을 연고지로 홀로웨이의 에미레이츠 스타디움을 홈구장으로 하는 잉글랜드의 축구 클럽이다.</span>
                                <span class="keyword">
                                    <span>#과학</span>
                                    <span>#구너</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../assets/img/card02.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>Leicester</strong>
                                <span>레스터 시티 풋볼 클럽은 레스터를 연고지로 을 연고지로 하는 프로 축구 구단이다</span>
                                <span class="keyword">
                                    <span>#여우</span>
                                    <span>#기적</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../assets/img/card03.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>Tottenham Hotspur</strong>
                                <span>토트넘 홋스퍼 FC는 잉글랜드 북런던 토트넘을 연고지로 하는 프로 축구 구단이다.</span>
                                <span class="keyword">
                                    <span>#손흥민</span>
                                    <span>#닭집</span>
                                </span>
                            </div>
                        </li>
                    </ul>
                </section>
            </article>
            <article class="flow-article">
                <h3 class="ir_so">웹스토리보이 강의 설명</h3>
                <section class="section-intro container">
                    <h4 class="ir_so">강의 소개</h4>
                    <div class="youtube-intro">
                        <div>
                            <iframe src="https://www.youtube.com/embed/s_D2Xd2gbV8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div>
                            <h5>페이퍼 프로토타입 어떻게 만들어야 할까?</h5>
                            <p>페이퍼 프로토타입의 제작 과정과 내용을 설명하는 동영상입니다.
                            </p>
                            <div class="interview">
                                <div class="icon">
                                    <a href="http://www.youtube.com/watch?v=gGlVkOiYRus&list=PL4UVBBIc6giLLag20uIwHlHsG83q3PYa5" target="_blank">
                                        <img src="../assets/img/svg-pizza.svg" alt="이정아">
                                        <span>#김현정</span>
                                    </a>
                                </div>
                                <div class="icon">
                                    <a href="http://www.youtube.com/watch?v=gGlVkOiYRus&list=PL4UVBBIc6giLLag20uIwHlHsG83q3PYa5" target="_blank">
                                        <img src="../assets/img/svg-vanilla-cupcake.svg" alt="서지현">
                                        <span>#김태휘</span>
                                    </a>
                                </div>
                                <div class="icon">
                                    <a href="http://www.youtube.com/watch?v=NWHIwQlptgM&list=PL4UVBBIc6giLLag20uIwHlHsG83q3PYa5&index=3" target="_blank">
                                        <img src="../assets/img/svg-pear.svg" alt="이소연">
                                        <span>#정은지</span>
                                    </a>
                                </div>
                                <div class="icon">
                                    <a href="http://www.youtube.com/watch?v=NWHIwQlptgM&list=PL4UVBBIc6giLLag20uIwHlHsG83q3PYa5&index=3" target="_blank">
                                        <img src="../assets/img/svg-cherries.svg" alt="이다빈">
                                        <span>#인재연</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </article>
            <article class="content-article content-sub">
                <h3>The Plant Story</h3>
                <p>집에서 쉽게 기를 수있는 식물에 관한 정보를 제공하는 사이트</p>
                <section class="section-card">
                    <h4 class="ir_so">카드 컨텐츠</h4>
                    <ul class="card-list2">
                        <li>
                            <a href="#">
                                <img src="../assets/img/card2-1.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>Sansevieria</strong>
                                <span class="keyword">
                                    <span>산세비에리아</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../assets/img/card2-2.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>Scindapsus</strong>
                                <span class="keyword">
                                    <span>스킨답서스</span><span>Araceae</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../assets/img/card2-3.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>Peperomia</strong>
                                <span class="keyword">
                                    <span>청페페</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../assets/img/card2-4.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>Chamaedorea</strong>
                                <span class="keyword">
                                    <span>테이블 야자</span>
                                </span>
                            </div>
                        </li>
                    </ul>
                </section>
            </article>
            <article class="flow-article content-sub">
                <h3>최신 소식</h3>
                <p>최신 소식을 바로 확인 할 수 있습니다.</p>
                <section class="section-news container">
                    <div class="news">
                        <h4>게시판 업데이트</h4>
                        <ul>
                            <?php
                            $sql = "SELECT myBoardID, boardTitle, regTime FROM myBoard ORDER BY myBoardID DESC LIMIT 4";
                            $result = $connect->query($sql);
                            if ($result) {
                                $count = $result->num_rows;
                                if ($count > 0) {
                                    for ($i = 1; $i <= $count; $i++) {
                                        $info = $result->fetch_array(MYSQLI_ASSOC);
                                        echo "<li><a href='../board/boardView.php?boardID=" . $info['myBoardID'] . "'>" . $info['boardTitle'] . "</a><span>" . date('Y-m-d', $info['regTime']) . "</span></li>";
                                    }
                                }
                            }
                            ?>
                        </ul>
                        <a href="board.html" title="더보기" class="more">더보기</a>
                    </div>
                    <div class="news">
                        <h4>댓글 업데이트</h4>
                        <ul>
                            <?php
                            $sql = "SELECT youText, regTime FROM myComment ORDER BY regTime DESC LIMIT 4";
                            $result = $connect->query($sql);
                            if ($result) {
                                $count = $result->num_rows;
                                if ($count > 0) {
                                    for ($i = 1; $i <= $count; $i++) {
                                        $info = $result->fetch_array(MYSQLI_ASSOC);
                                        echo "<li><a href='../comment/comment.php'>" . $info['youText'] . "</a><span>" . date('Y-m-d', $info['regTime']) . "</span></li>";
                                    }
                                }
                            }
                            ?>
                        </ul>
                        <a href="comment.html" title="더보기" class="more">더보기</a>
                    </div>
                </section>
                </articel>
        </section>
    </main>
    <!-- //contents -->

    <footer id="footer">
        <?php
        include "../include/footer.php";
        ?>
    </footer>
    <!-- //footer -->
</body>

</html>