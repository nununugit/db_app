<template>
<div class="container px-5 my-5">
    <div class="text-center mb-5">
        <h1 class="fw-bolder">授業一覧</h1>
        <p class="lead fw-normal text-muted mb-0">授業一覧が表示されているページです。</p>
    </div>
    <div class="row gx-5">
        <div class="">
            <!-- FAQ Accordion 1-->
            <div v-for="(field, index) in fields.data" :key="index">
                <h2 class="fw-bolder mb-3">{{field.f_name}}</h2>
                <div class="accordion mb-5" v-bind:id="['accordion-'+index]">
                    <div v-for="(curriculum, index_c) in curricula.data" :key="index_c" class="accordion-item">
                        <h3 class="accordion-header" v-bind:id="['heading-'+index_c]">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" v-bind:data-bs-target="['#collapse-'+index_c]" v-bind:aria-expanded="{true: isActive}" v-bind:aria-controls="['collapse-'+index_c]" v-on:click="isActive = !isActive">
                                {{curriculum.c_name}}
                            </button>
                        </h3>
                        <div class="accordion-collapse collapse" v-bind:class="{show: isActive}" v-bind:id="['#collapse-'+index_c]" v-bind:aria-labelledby="['heading-'+index_c]" v-bind:data-bs-parent="['accordion-'+index]">
                            <div class="accordion-body">
                                {{ curriculum.c_content }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    </div>
</template>


<script>
    export default {
        data: function () {
            return {
                curricula: [],
                fields: [],
                curriculainfo:[],
                isActive:true
            }
        },
        methods: {
            // API経由で全タスクを取得
            getCurricula() {
                axios.get('api/curricula')
                    .then((res) => {
                        this.curricula = res.data;
                        console.log(this.curricula)
                    });
            },

            getFields() {
                axios.get('api/fields')
                    .then((res) => {
                        this.fields = res.data;
                        console.log(this.fields)
                    });
            },

            getCurriculaInfo() {
                axios.get('api/curricula_info')
                    .then((res) => {
                        this.curriculainfo = res.data;
                        console.log(this.curriculainfo)
                    });
            },
            TorF(i) {
                if(i == '0'){
                    return 'true'
                }else{
                    return 'false'
                }
            },
            TfShow(i) {
                if(i == '0'){
                    return 'show'
                }else{
                    return false
                }
            }


            
        },
        computed: {
            
        },
        mounted() {
            this.getCurricula();
            this.getFields();
            this.getCurriculaInfo();
        },
        
        
    }
</script>