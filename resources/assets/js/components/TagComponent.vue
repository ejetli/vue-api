<template>
	<div>
		<h2>Tags</h2>
		<form @submit.prevent="addTag" class="mb-3">
			<div class="form-group">
				<input type="text" name="" class="form-control" placeholder="Name" v-model="tag.name">
			</div>
			<div class="form-group">
				<textarea class="form-control" placeholder="about" v-model="tag.about"></textarea>
			</div>

			<div class="form-group">
				<input type="text" class="form-control" placeholder="status" v-model="tag.status">
			</div>

			<div class="form-group">
				<input type="text" class="form-control" placeholder="order" v-model="tag.order">
			</div>

			<div class="form-group">
				<input type="text" class="form-control" placeholder="course_id" v-model="tag.course_id">
			</div>

			<div class="form-group">
				<input type="text" class="form-control" placeholder="user_id" v-model="tag.user_id">
			</div>
			<button type="submit" class="btn btn-info btn-block">Save</button>
		</form>

		<nav aria-label="Page navigation example">
		  <ul class="pagination">
		    <li v-bind:class="[{disabled: !pagination.prev_page_url}]" class="page-item"><a class="page-link" href="#" 
		    	@click="fetchTag(pagination.prev_page_url)"
		    	>Previous</a></li>
		    
		        <li class="page-item disabled"><a class="page-link text-dark" href="#">Page {{ pagination.current_page }} of {{ pagination.last_page }}</a></li>


		    <li v-bind:class="[{disabled: !pagination.next_page_url}]" class="page-item"><a class="page-link" href="#"
		    	@click="fetchTag(pagination.next_page_url)"
		    	>Next</a></li>
		  </ul>
		</nav>

		<div class="card card-body md-2" v-for="tag in tags" v-bind:key="tag.id">
			<h3>{{ tag.name }}</h3>
			<p>{{ tag.about }}</p>
			<p>{{ tag.status }}</p>
			<p>{{ tag.order }}</p>
			<p>{{ tag.course_id }}</p>
			<p>{{ tag.user_id }}</p>
			<hr>
			<button @click="editTag(tag)" class="btn btn-warning md-2">Edit</button>
			<button @click="deleteTag(tag.id)" class="btn btn-danger">Delete</button>
		</div>
	</div>
</template>

<script>
	export default {
		data() {
			return {
				tags: [],
				tag: {
					name: '',
					about: '',
					status: '',				
					order: '',
					course_id: '',
					user_id: ''
				},
				tag_id: '',
				pagination: {},
				edit: false
			}
	 	},

	 	created() {
	 		this.fetchTag();
	 	},

	 	methods: {
	 		fetchTag(page_url) {
	 			let vm = this;
	 			page_url = page_url || '/api/tags'
	 			fetch(page_url)
	 				.then(res => res.json())
	 				.then(res => {
	 					this.tags = res.data;
	 					vm.makePagination(res.meta, res.links);
	 					console.log(res.data);
	 				})
	 				.catch(err => console.log(err)); 
	 		},
	 		makePagination(meta, links) {
	 			let pagination = {
	 				current_page: meta.current_page,
	 				last_page: meta.last_page,
	 				next_page_url: links.next,
	 				prev_page_url: links.prev
	 			};

	 			this.pagination = pagination;
	 		},
	 		deleteTag(id) {
	 			if(confirm('Are You Sure?')){
	 				fetch(`api/tag/${id}`,{
	 					method: 'delete'
	 				})
	 				.then(res => res.json())
	 				.then(data => {
	 					alert('Tag Remove');
	 					this.fetchTag();
	 				})
	 				.catch(err => console.log(err));
	 			}
	 		},
	 		addTag() {
	 			if (this.edit === false) {
	 				//add
	 				fetch('api/tag', {
	 					method: 'post',
	 					body: JSON.stringify(this.tag),
	 					headers: {
	 						'content-type': 'application/json'
	 					}
	 				})
	 				.then(res => res.json())
	 				.then(data => {
	 					this.tag.name = '';
			 			this.tag.order = '';
			 			this.tag.status = '';
			 			this.tag.about = '';
			 			this.tag.course_id = '';
			 			this.tag.user_id = '';
	 					alert('Tag Added');
	 					this.fetchTag();
	 				})
	 				.catch(err => console.log(err));
	 			} else {
	 				//update
	 				fetch('api/tag', {
	 					method: 'put',
	 					body: JSON.stringify(this.tag),
	 					headers: {
	 						'content-type': 'application/json'
	 					}
	 				})
	 				.then(res => res.json())
	 				.then(data => {
			 			this.tag.name = '';
			 			this.tag.order = '';
			 			this.tag.status = '';
			 			this.tag.about = '';
			 			this.tag.course_id = '';
			 			this.tag.user_id = '';
	 					alert('Tag Updated');
	 					this.fetchTag();
	 				})
	 				.catch(err => console.log(err));
	 			}
	 		},
	 		editTag(tag) {
	 			this.edit = true;
	 			this.tag.id = tag.id;
	 			this.tag.tag_id = tag.id;
	 			this.tag.name = tag.name;
	 			this.tag.order = tag.order;
	 			this.tag.status = tag.status;
	 			this.tag.about = tag.about;
	 			this.tag.course_id = tag.course_id;
	 			this.tag.user_id = tag.user_id;

	 		}
	 	}		
 };
			
</script>	