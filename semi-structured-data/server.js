const express = require('express');
const mongoose = require('mongoose');
const bodyParser = require('body-parser');
const fs = require('fs');

const app = express();
const port = 3000;


mongoose.connect('mongodb://localhost:27017/social_media_db', { useNewUrlParser: true, useUnifiedTopology: true });
const db = mongoose.connection;
db.on('error', console.error.bind(console, 'Erreur de connexion à MongoDB : '));
db.once('open', () => {
  console.log('Connecté à la base de données MongoDB');
});


app.use(bodyParser.json());


const userSchema = new mongoose.Schema({
  username: String,
  email: String,
  passwordHash: String,
  fullName:String,
  email: String,
  birthdate: String,
  location: String,
  bio: String,
  friends: [Number, Number],
  posts: [Number, Number],
  createdAt: String,
});

const postSchema = new mongoose.Schema({
  postId: Number,
  userId: Number,
  content: mongoose.Schema.Types.Mixed, 
  likes: [Number],
  comments : [Number]
});

const commentSchema = new mongoose.Schema({
  commentId: Number,
  userId: Number,
  postId: Number,
  content: mongoose.Schema.Types.Mixed,
  createdAt: String,
});
function readDatabase() {
  const data = fs.readFileSync(DATABASE_PATH);
  return JSON.parse(data);
}

function writeDatabase(data) {
  fs.writeFileSync(DATABASE_PATH, JSON.stringify(data, null, 2));
}

function createUser(user) {
  const data = readDatabase();
  const newUserId = data.users.length + 1;
  user.userId = newUserId;
  user.createdAt = new Date().toISOString();
  data.users.push(user);
  writeDatabase(data);
  return user;
}

function getAllUsers() {
  const data = readDatabase();
  return data.users;
}

function getUserById(userId) {
  const data = readDatabase();
  return data.users.find(user => user.userId === userId);
}

function updateUser(userId, updatedUser) {
    const data = readDatabase();
    const index = data.users.findIndex(user => user.userId === userId);
    if (index !== -1) {
      data.users[index] = { ...data.users[index], ...updatedUser };
      writeDatabase(data);
      return data.users[index];
    }
    return null;
  }
  
  function deleteUser(userId) {
    const data = readDatabase();
    const index = data.users.findIndex(user => user.userId === userId);
    if (index !== -1) {
      const deletedUser = data.users.splice(index, 1)[0];
      data.posts = data.posts.filter(post => post.userId !== userId);
      data.comments = data.comments.filter(comment => comment.userId !== userId);
      data.likes = data.likes.filter(like => like.userId !== userId);
      
      writeDatabase(data);
      return deletedUser;
    }
    return null;
  }
  function createPost(post) {
    const data = readDatabase();
    const newPostId = data.posts.length + 1;
    post.postId = newPostId;
    post.createdAt = new Date().toISOString();
    data.posts.push(post);
    writeDatabase(data);
    return post;
  }
  
  function getAllPosts() {
    const data = readDatabase();
    return data.posts;
  }
  
  function getPostById(postId) {
      const data = readDatabase();
      return data.posts.find(post => post.postId === postId);
  }
    
  function updatePost(postId, updatedPost) {
      const data = readDatabase();
      const index = data.posts.findIndex(post => post.postId === postId);
      if (index !== -1) {
        data.posts[index] = { ...data.posts[index], ...updatedPost };
        writeDatabase(data);
        return data.posts[index];
      }
      return null;
  }
    
  function deletePost(postId) {
      const data = readDatabase();
      const index = data.posts.findIndex(post => post.postId === postId);
      if (index !== -1) {
        const deletedPost = data.posts.splice(index, 1)[0];
        writeDatabase(data);
        return deletedPost;
      }
      return null;
  }
  function createComment(comment) {
    const data = readDatabase();
    const newCommentId = data.comments.length + 1;
    comment.commentId = newCommentId;
    comment.createdAt = new Date().toISOString();
    data.comments.push(comment);
    writeDatabase(data);
    return comment;
  }
  
  function getAllComments() {
    const data = readDatabase();
    return data.comments;
  }
  
  function getCommentById(commentId) {
    const data = readDatabase();
    return data.comments.find(comment => comment.commentId === commentId);
  }
  
  function updateComment(commentId, updatedComment) {
    const data = readDatabase();
    const index = data.comments.findIndex(comment => comment.commentId === commentId);
    if (index !== -1) {
      data.comments[index] = { ...data.comments[index], ...updatedComment };
      writeDatabase(data);
      return data.comments[index];
    }
    return null;
  }
  
  function deleteComment(commentId) {
    const data = readDatabase();
    const index = data.comments.findIndex(comment => comment.commentId === commentId);
    if (index !== -1) {
      const deletedComment = data.comments.splice(index, 1)[0];
      writeDatabase(data);
      return deletedComment;
    }
    return null;
  }
  function createLike(likeId) {
    const data = readDatabase();
    const newLikeId = data.likes.length + 1;
    like.likeId = newLikeId;
    like.createdAt = new Date().toISOString();
    data.likes.push(like);
    writeDatabase(data);
    return like;
  }
  
  function getAllLikes() {
    const data = readDatabase();
    return data.likes;
  }
  
  function getLikeById(likeId) {
    const data = readDatabase();
    return data.likes.find(like => like.likeId === likeId);
  }
  
  function updateLike(likeId, updatedLike) {
    const data = readDatabase();
    const index = data.likes.findIndex(like => like.likeId === likeId);
    if (index !== -1) {
      data.likes[index] = { ...data.likes[index], ...updatedLike };
      writeDatabase(data);
      return data.likes[index];
    }
    return null;
  }
  
  function deleteLike(likeId) {
    const data = readDatabase();
    const index = data.likes.findIndex(like => like.likeId === likeId);
    if (index !== -1) {
      const deletedLike = data.likes.splice(index, 1)[0];
      writeDatabase(data);
      return deletedLike;
    }
    return null;
  }
  module.exports = {
    createUser,
    getAllUsers,
    getUserById,
    updateUser,
    deleteUser,
  
    createPost,
    getAllPosts,
    getPostById,
    updatePost,
    deletePost,
  
    createComment,
    getAllComments,
    getCommentById,
    updateComment,
    deleteComment,
  
    createLike,
    getAllLikes,
    getLikeById,
    updateLike,
    deleteLike,
  };
  
  
  app.listen(port, () => {
    console.log(`Serveur en cours d'exécution sur le port ${port}`);
  });
