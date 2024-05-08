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
}
