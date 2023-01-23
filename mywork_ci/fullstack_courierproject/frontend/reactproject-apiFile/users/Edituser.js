import React, { useState } from "react";
import axios from "axios";
import { useNavigate } from "react-router-dom";

const Edituser = (props) => {
  const navigate = useNavigate();
  const [userInfo, setuserInfo] = useState({
    firstname: props.list.firstname,
    lastname: props.list.lastname,
    email: props.list.email,
    password: props.list.password,
    type: props.list.type,
    branch_id: props.list.branch_id,
  });
  const onChangeValue = (e) => {
    setuserInfo({ ...userInfo, [e.target.name]: e.target.value });
  };
  // Inserting a new user 
  const submitUser = async (event) => {
    try {
      event.preventDefault();
      event.persist();
      axios
        .post(
          `http://localhost/reactjs_mywork/reactproject/courierapp/api/edituser.php`,
          {
            userfirstname: userInfo.firstname,
            userlastname: userInfo.lastname,
            useremail: userInfo.email,
            userpassword: userInfo.password,
            usertype: userInfo.type,
            userbranch_id: userInfo.branch_id,
            userids: props.list.id,
          }
        )
        .then((res) => {
          console.log(res.data);
          navigate(`/users`);
          return;
        });
    } catch (error) {
      throw error;
    }
  };

  return (
    <div>
      <form className="editForm" onSubmit={submitUser}>
        <h2 className="bg-dark text-light"> Edit User Form </h2>
        <div className="form-group">
          <label htmlFor="_firstname">FirstName</label>
          <input
            type="text"
            id="_firstname"
            name="firstname"
            value={userInfo.firstname}
            onChange={onChangeValue}
            placeholder="Enter FirstName"
            autoComplete="off"
            required
            className="form-control"
          />
        </div>
        <div className="form-group">
          <label htmlFor="_lastname">LastName</label>
          <input
            type="text"
            id="_lastname"
            name="lastname"
            value={userInfo.lastname}
            onChange={onChangeValue}
            placeholder="Enter LastName"
            autoComplete="off"
            required
            className="form-control"
          />
        </div>
        <div className="form-group">
          <label htmlFor="_email">Email</label>
          <input
            type="email"
            id="_email"
            name="email"
            value={userInfo.email}
            onChange={onChangeValue}
            placeholder="Enter Email"
            autoComplete="off"
            required
            className="form-control"
          />
        </div>
        <div className="form-group">
          <label htmlFor="password">Password</label>
          <input
            type="password"
            id="password"
            name="password"
            value={userInfo.password}
            onChange={onChangeValue}
            placeholder="Enter Password"
            autoComplete="off"
            required
            className="form-control"
          />
        </div>
        <div className="form-group">
          <label htmlFor="_type">Type</label>
          <input
            type="text"
            id="_type"
            name="type"
            value={userInfo.type}
            onChange={onChangeValue}
            placeholder="Enter Type"
            autoComplete="off"
            required
            className="form-control"
          />
        </div>
        <div className="form-group">
          <label htmlFor="branch_id">Branch ID</label>
          <input
            type="text"
            id="branch_id"
            name="branch_id"
            value={userInfo.branch_id}
            onChange={onChangeValue}
            placeholder="Enter Branch ID"
            autoComplete="off"
            required
            className="form-control"
          />
        </div>
        <input
          className="btn btn-primary btn-lg"
          type="submit"
          value="UPDATE"
        />
      </form>
    </div>
  );
};

export default Edituser;
