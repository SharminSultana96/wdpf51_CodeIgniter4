import React, { useEffect, useState } from "react";
import axios from "axios";
import { Link } from "react-router-dom";

const UserList = () => {
    useEffect(() => {
        alluser();
    },[]);

    const [isuser, setuser] = useState([]);
    const alluser = async() => {
        axios.get(`http://localhost/reactjs_mywork/reactproject/courierapp/api/allusers.php`
        )
        .then((res) => {
            //console.log(res.data.mydata);
            setuser(res.data.mydata);
        })
        .then((error) => console.log(error));
    };

    const deleteConfirm = (id) => {
        if(window.confirm("Are you sure?")){
            deleteUser(id);
        }
    }

    const deleteUser = async(id) =>{
        try {
            axios.post(`http://localhost/reactjs_mywork/reactproject/courierapp/api/deleteuser.php`,
            {userid: id}
            )
            .then((res) => {
                //setuser([]);
                alert(res.data.success);
                alluser();
                return;
            });
        }catch(error) {
            throw error;
        }
    }

  return (
    <div>
        <table className="table table-striped">
        <thead className="bg-dark text-light">
          <tr>
            <th>ID</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Email</th>
            <th>Type</th>
            <th>Branch ID</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          {isuser.map((item, index) => (
            <tr key={item.id}>
              <td>{index + 1}</td>
              <td>{item.firstname}</td>
              <td>{item.lastname}</td>
              <td>{item.email}</td>
              <td>{item.type}</td>
              <td>{item.branch_id}</td>
              <td>
                <Link
                  to={`edit/${item.id}`}
                  className="btn btn-outline-primary"
                >
                  Edit
                </Link>
                <span
                  onClick={() => deleteConfirm(item.id)}
                  className="btn btn-outline-danger mx-2"
                >
                  Delete
                </span>
              </td>
            </tr>
          ))}
        </tbody>
      </table>
      <Link to="/adduser" className="btn btn-primary btn-lg">
        Create New User
      </Link>
    </div>
  )
}

export default UserList;

