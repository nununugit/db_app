<template>
    <div class="container px-10 my-5">
        <div class="text-center mb-5">
            <h1 class="fw-bolder">授業一覧</h1>
            <p class="lead fw-normal text-muted mb-0">授業一覧が表示されているページです。</p>
        </div>
        <div class="row gx-5">
            <div v-for="(field, index) in fields.data" :key="index">
                <h2 class="fw-bolder mb-3">{{field.f_name}}</h2>
                <div class="accordion mb-5" v-bind:id="['accordion-'+index]">
                    <div class="accordion-item">
                        <div  v-for="(curriculum, index_c) in sortField(curriculainfo,field.id)" :key="index_c">                    
                                <h3 class="accordion-header" v-bind:id="['heading-'+field.f_name+index_c]">
                                    <button class="accordion-button" v-bind:class="{collapsed: activeItem === field.f_name+index_c}"  type="button" data-bs-toggle="collapse" v-bind:data-bs-target="['#collapse-'+field.f_name+index_c]" v-bind:aria-expanded="{true: activeItem === field.f_name+index_c}" v-bind:aria-controls="['collapse-'+field.f_name+index_c]" v-on:click="onActive(field.f_name+index_c)">
                                        {{curriculum.c_name}}
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" v-bind:class="{show: activeItem === field.f_name+index_c}" v-bind:id="['#collapse-'+field.f_name+index_c]" v-bind:aria-labelledby="['heading-'+field.f_name+index_c]" v-bind:data-bs-parent="['accordion-'+index]">
                                    <div class="accordion-body">
                                        {{ curriculum.c_content }}
                                        <div>
                                        担当教員:{{ curriculum.t_name }}
                                        </div>
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
                fields: [],
                curriculainfo:[],
                activeItem: null
            }
        },
        methods: {
            getFields() {
                axios.get('api/fields')
                    .then((res) => {
                        this.fields = res.data;
                        // console.log(this.fields)
                    });
            },
            getCurriculaInfo() {
                axios.get('api/curricula_info')
                    .then((res) => {
                        this.curriculainfo = res.data;
                        // console.log(this.curriculainfo)
                    });
            },
            onActive(n) {
                if(this.activeItem === n){
                this.activeItem = null;
                }else{
                this.activeItem = n;
                }
            },
            sortField(cinfo,fid) {
                let sf =[]
                cinfo.forEach(function(element){
                    if(element.f_id == fid){
                        sf.push(element)
                        console.log(sf)
                    }
                })
                return sf
            }

        },
        mounted() {
            this.getFields();
            this.getCurriculaInfo();
        },
    }
</script>