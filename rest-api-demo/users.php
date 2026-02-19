<?php

switch ($requestMethod) {

    // --------------------------
    // GET /users
    // GET /users/{id}
    // --------------------------
    case "GET":
        if ($id) {
            $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();

            if ($user) {
                echo json_encode($user);
            } else {
                http_response_code(404);
                echo json_encode(["error" => "User not found"]);
            }
        } else {
            $result = $conn->query("SELECT * FROM users");
            $users = $result->fetch_all(MYSQLI_ASSOC);
            echo json_encode($users);
        }
        break;

    // --------------------------
    // POST /users
    // --------------------------
    case "POST":
        $data = json_decode(file_get_contents("php://input"), true);

        $stmt = $conn->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
        $stmt->bind_param("ss", $data['name'], $data['email']);

        if ($stmt->execute()) {
            http_response_code(201);
            echo json_encode(["message" => "User created"]);
        } else {
            http_response_code(400);
            echo json_encode(["error" => $stmt->error]);
        }
        break;

    // --------------------------
    // PUT /users/{id}
    // --------------------------
    case "PUT":
        if (!$id) {
            http_response_code(400);
            echo json_encode(["error" => "User ID required"]);
            break;
        }

        $data = json_decode(file_get_contents("php://input"), true);

        $stmt = $conn->prepare("UPDATE users SET name = ?, email = ? WHERE id = ?");
        $stmt->bind_param("ssi", $data['name'], $data['email'], $id);

        if ($stmt->execute()) {
            echo json_encode(["message" => "User updated"]);
        } else {
            http_response_code(400);
            echo json_encode(["error" => "Update failed"]);
        }
        break;

    // --------------------------
    // DELETE /users/{id}
    // --------------------------
    case "DELETE":
        if (!$id) {
            http_response_code(400);
            echo json_encode(["error" => "User ID required"]);
            break;
        }

        $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            echo json_encode(["message" => "User deleted"]);
        } else {
            http_response_code(400);
            echo json_encode(["error" => "Delete failed"]);
        }
        break;

    default:
        http_response_code(405);
        echo json_encode(["error" => "Method not allowed"]);
}
?>
