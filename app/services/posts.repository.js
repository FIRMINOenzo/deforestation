export class PostsRepository {
    async getPosts() {
        try {
            const posts = await fetch("http://localhost:80/api/posts", {
                method: "GET",
            });

            return posts;
        } catch (err) {
            console.log(err);
        }
    }

    async getPostById(id) {
        try {
            const posts = await fetch(`http://localhost:80/api/posts/${id}`, {
                method: "GET",
            });

            return posts;
        } catch (err) {
            console.log(err);
        }
    }

    async createPost(post, userId) {
        try {
            const posts = await fetch(`http://localhost:80/api/posts/${id}`, {
                method: "POST",
                body: JSON.stringify(post),
            });

            return posts;
        } catch (err) {
            console.log(err);
        }
    }
}
