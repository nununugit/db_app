@extends('layouts.app')

@section('content')
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="row gx-5">
            <div class="col-lg-3">
                <div class="d-flex align-items-center mt-lg-5 mb-4">
                    <img class="img-fluid rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." />
                    <div class="ms-3">
                        <div class="fw-bold">就職担当:横井健</div>
                        <div class="text-muted">yokoi&#064;metro-cit.ac.jp</div>
                    </div>
                </div>
                <div class="d-flex align-items-center mt-lg-5 mb-4">
                    <img class="img-fluid rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." />
                    <div class="ms-3">
                        <div class="fw-bold">教育委員:浅川澄人</div>
                        <div class="text-muted">asakawa&#064;metro-cit.ac.jp</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <!-- Post content-->
                <article>
                    <!-- Post header-->
                    <header class="mb-4">
                        <!-- Post title-->
                        <h1 class="fw-bolder mb-1">在校生へ</h1>
                        <!-- Post meta content-->
                        <div class="text-muted fst-italic mb-2">Decenber ,10 2021</div>
                        <!-- Post categories-->
                    </header>
                    <!-- Preview image figure-->
                    <figure class="mb-4"><img class="img-fluid rounded" src="https://dummyimage.com/900x400/ced4da/6c757d.jpg" alt="..." /></figure>
                    <!-- Post content-->
                    <section class="mb-5">
                        <b class="fs-4 mb-4">
                            アカデミックライセンス契約に関する注意
                        </b>
                        <p class="fs-5 mb-4">
                            アカデミックライセンス契約によって在学生向けに各種アプリケーションが利用できます。本校ポータルサイトを確認した上で積極的に利用してください。 
                        </p>
                        
                        <b class="fs-4 mb-4">
                            本校専攻科を志望する学生に向けた注意
                        </b>
                        <p class="fs-5 mb-4">
                            専攻科の卒業要件に該当する授業が本科の選択授業にあります。 これを取得していない場合、 専攻科を卒業することができません。 
                            専攻科へ進級する予定の学生はこれを本科もしくは専攻科在学中に履修する必要があります。 履修すべき科目については専攻科のコースごとに異なります。 カリキュラムを参照の上、 十分に注意してください。 
                        </p>
                        
                        <b class="fs-4 mb-4">
                            資格等の学外単位に関する注意
                        </b>
                        <p class="fs-5 mb-4">
                            当コース学生用にクラス指定されている授業以外に、 各種資格が単位として認められる場合があります。 
                            学外単位申請書類を記入し、 教務学生係に提出すること。
                        </p>
                        <p>
                            <a href="#">公務支援システム</a>
                        </p>                        
                        
                        <p>
                            <a href="#">その他のリンク</a>
                        </p>                        
                    </section>
                </article>
                <!-- Comments section-->
            </div>
        </div>
    </div>
</section>
@endsection
