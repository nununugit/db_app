<template>
<section class="py-5 bg-light">
    <div class="container px-5 my-5">
        <div class="text-center">
            <h2 class="fw-bolder">研究室紹介</h2>
            <p class="lead fw-normal text-muted mb-5">本校の研究室の先生方です。</p>
        </div>

        <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center">
            <div v-for="(teacher, index) in teachers.data" :key="index" class="col mb-5 mb-5 mb-xl-0">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/150x150/ced4da/6c757d" alt="..." />
                    <h5 class="fw-bolder">{{teacher.t_name}}</h5>
                    <div class="fst-italic text-muted">役職</div>
                </div>
            </div>
        </div>
        <br>
        <br>
        
        <div>
            <div v-for="(labo_info_one, index) in labo_info" :key="index">
            <h3 class="fw-bolder">{{labo_info_one.t_name +'研究室'}}</h3>
            <br>
            <h4>{{labo_info_one.l_content}}</h4>
            
            <h4>
            <a href="#">{{labo_info_one.t_name +'研究室HP'}}</a>
            </h4>
            <br>
            <br>
            </div>

        </div>
    
    </div>
</section>


</template>

<script>
    export default {
        data: function () {
            return {
                teachers: [],
                labo_info: []
            }
        },
        methods: {
            // API経由で全タスクを取得
            getTeachers() {
                axios.get('api/teachers')
                    .then((res) => {
                        this.teachers = res.data;
                        console.log(this.teachers)
                    });
            },

            getLaboInfo() {
                axios.get('api/labo_info')
                    .then((res) => {
                        this.labo_info = res.data;
                        console.log(this.labo_info)
                    });
            }
        },
        mounted() {
            this.getTeachers();
            this.getLaboInfo();
        },
        
    }
</script>