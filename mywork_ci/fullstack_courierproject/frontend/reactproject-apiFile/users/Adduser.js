import React, { useState } from 'react';
import axios from 'axios';
import { useNavigate } from 'react-router-dom';

const Adduser = () => {
    const navigate = useNavigate();
    const [userInfo, setuserInfo] = useState({
        firstname: "",
        lastname: "",
        email: "",
        password: "",
        type: "",
        branch_id: "",
    });
    const onChangeValue = (e) => {
        setuserInfo({...userInfo, [e.target.name]: e.target.value});
    }

    // Inserting a new user

    const submitUser = async (event) => {
        try {
            event.preventDefault();
            event.persist();

            axios.post(`http://localhost/reactjs_mywork/reactproject/courierapp/api/adduser.php`,
            {
                userfirstname: userInfo.firstname,
                userlastname: userInfo.lastname,
                useremail: userInfo.email,
                userpass: userInfo.password, 
                usertype: userInfo.type, 
                userbranch_id: userInfo.branch_id, 
            })
            .then((res) => {
                console.log(res.data);
                navigate(`/users`);
                return;
            });
        }catch(error) {
            throw error;
        }
    }

  return (
    <div>
      <h2 className="bg-dark text-light">Add New User</h2>
      <form className="insertForm" onSubmit={submitUser}>
        <div className="form-group">
          <label htmlFor="_firstname">FirstName</label>
          <input
            type="text"
            id="_firstname"
            name="firstname"
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
          onChange={onChangeValue}
          placeholder="Enter Branch ID"
          autoComplete="off"
          required
          className="form-control"
        />
        </div>
        <div class="d-grid gap-2">
          <button type="submit" class="btn btn-primary">
            Submit
          </button>
        </div>
      </form>
    </div>
  )
}

export default Adduser;