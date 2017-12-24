<template>
	<article>
		<div class="post-preview">
			<a :href="slug">
				<h2 class="post-title">
					{{ title }}
				</h2>
				<h3 class="post-subtitle">
					{{ subtitle }}
				</h3>
			</a>
			<p class="post-meta">Publicado por: {{ posted_by }}
				<a href="#"></a> 
				&nbsp;&nbsp;&nbsp;&nbsp;{{ created_at }}
				<a href="" @click.prevent="likeIt">
					<small>{{ likeCount }}</small>
					<i class="fa fa-thumbs-up" v-if="likeCount == 0" aria-hidden="true">Me gusta</i>
					<i class="fa fa-thumbs-down" v-else="likeCount > 0 " aria-hidden="true">Ya no me gusta</i>
				</a>
			</p>
		</div>
		<hr>
	</article>

</template>

<script>
export default{
	data(){
		return{
			likeCount: 0
		}
	},
	props: [
	'title', 'subtitle', 'created_at', 'slug', 'posted_by', 'post_id', 'login', 'likes'
	],
	created(){
		this.likeCount = this.likes
	},
	methods: {
		likeIt(){
			if (this.login) {
				axios.post('/saveLike', {id: this.post_id})
				.then(response => {
					if (response.data == 'deleted') {
						this.likeCount -= 1;
					}
					else {
						this.likeCount += 1;
					}
				
			//this.blog = response.data.data;
			
		})
				.catch(function (error) {
					console.log(error);
				});
			}
			else {
				window.location = 'login'
			}
			
		}
	}
}
</script>