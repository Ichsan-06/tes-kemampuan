const request = require("supertest");

const API_URL = "http://127.0.0.1:8000/api"; // Sesuaikan dengan URL Laravel
let userId; // Variable untuk menyimpan ID user yang dibuat

describe("User API CRUD Tests", () => {
  it("should create a new user", async () => {
    const response = await request(API_URL)
      .post("/users")
      .send({
        name: "John Doe",
        email: "johndoe@example.com",
        age: 21,
      });

    if (response.error) {
      console.log(response.error.message);
    }

    expect(response.status).toBe(201);

    console.log(response.body)
    userId = response.body.data.id; // Simpan ID user untuk tes berikutnya
  });

  it("should get all users", async () => {
    const response = await request(API_URL).get("/users");

    expect(response.status).toBe(200);
  });

  it("should get a single user", async () => {
    const response = await request(API_URL).get(`/users/${userId}`);
    console.log(`/users/${userId}`)

    expect(response.status).toBe(200);
  });

  it("should update the user", async () => {
    const response = await request(API_URL)
      .put(`/users/${userId}`)
      .send({
        name: "John Doe",
        email: "johndoe@example.com",
        age: 22,
      });

    expect(response.status).toBe(200);
  });

  it("should delete the user", async () => {
    const response = await request(API_URL).delete(`/users/${userId}`);

    expect(response.status).toBe(204);

  });
});
