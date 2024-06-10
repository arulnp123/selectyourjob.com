<style>
p.qus {
    font-size: 17px;
    font-weight: bold;
  	margin-top: 20px;
}
tbody, ul{
	text-align: initial;
}
</style>

<section class="featured-section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12">
				<div class="about-content pr-70 rpr-0 wow fadeInRight delay-0-2s">
					<div class="section-title mb-35">
						<h3>Deep Learning Interview Questions and Answers</h3>
                      
						<p class="qus">1. What is Deep Learning?</p>
						<p class="ans">If you are going for a deep learning interview, you definitely know what exactly deep learning is. However, with this question the interviewee expects you to give an in-detail answer, with an example. Deep Learning involves taking large volumes of structured or unstructured data and using complex algorithms to train neural networks. It performs complex operations to extract hidden patterns and features (for instance, distinguishing the image of a cat from that of a dog).</p>
                      	<img src="<?= base_url(); ?>assets/img/deeplearning.jpg" style="width:700px;"/>
                      
                      <p class="qus">2. What is a Neural Network?</p>
                      <p class="ans">Neural Networks replicate the way humans learn, inspired by how the neurons in our brains fire, only much simpler.</p>
                      <img src="<?= base_url(); ?>assets/img/neuralnetwork.jpg" style="width:600px;"/>
                      <p class="ans">The most common Neural Networks consist of three network layers:</p>
                      <ul>
                        <li>1. An input layer</li>
                        <li>2. A hidden layer (this is the most important layer where feature extraction takes place, and adjustments are made to train faster and function better)</li>
                        <li>3. An output layer</li>
                      </ul>
                      <p clas="ans">Each sheet contains neurons called “nodes,” performing various operations. Neural Networks are used in deep learning algorithms like CNN, RNN, GAN, etc.</p>
                      
                      <p class="qus">3. What Is a Multi-layer Perceptron(MLP)?</p>
						<p class="ans">As in Neural Networks, MLPs have an input layer, a hidden layer, and an output layer. It has the same structure as a single layer perceptron with one or more hidden layers. A single layer perceptron can classify only linear separable classes with binary output (0,1), but MLP can classify nonlinear classes. Except for the input layer, each node in the other layers uses a nonlinear activation function. This means the input layers, the data coming in, and the activation function is based upon all nodes and weights being added together, producing the output. MLP uses a supervised learning method called “backpropagation.” In backpropagation, the neural network calculates the error with the help of cost function. It propagates this error backward from where it came (adjusts the weights to train the model more accurately).</p>
						<p class="qus">4. What Is Data Normalization, and Why Do We Need It?</p>
						<p class="ans">The process of standardizing and reforming data is called “Data Normalization.” It’s a pre-processing step to eliminate data redundancy. Often, data comes in, and you get the same information in different formats. In these cases, you should rescale values to fit into a particular range, achieving better convergence.</p>
						<p class="qus">5. What is the Boltzmann Machine?</p>
						<p class="ans">One of the most basic Deep Learning models is a Boltzmann Machine, resembling a simplified version of the Multi-Layer Perceptron. This model features a visible input layer and a hidden layer -- just a two-layer neural net that makes stochastic decisions as to whether a neuron should be on or off. Nodes are connected across layers, but no two nodes of the same layer are connected.</p>
						<p class="qus">6. What Is the Role of Activation Functions in a Neural Network?</p>
						<p class="ans">At the most basic level, an activation function decides whether a neuron should be fired or not. It accepts the weighted sum of the inputs and bias as input to any activation function. Step function, Sigmoid, ReLU, Tanh, and Softmax are examples of activation functions.
						<img src="<?= base_url(); ?>assets/img/activation.jpg" style="width:700px;"/>
						</p>
						<p class="qus">7. What Is the Cost Function?</p>
						<p class="ans">Also referred to as “loss” or “error,” cost function is a measure to evaluate how good your model’s performance is. It’s used to compute the error of the output layer during backpropagation. We push that error backward through the neural network and use that during the different training functions.<br>
						<img src="<?= base_url(); ?>assets/img/costfunction.jpg" style="width:700px;"/>
						</p>
						<p class="qus">8. What Is Gradient Descent?</p>
						<p class="ans">Gradient Descent is an optimal algorithm to minimize the cost function or to minimize an error. The aim is to find the local-global minima of a function. This determines the direction the model should take to reduce the error.
						<img src="<?= base_url(); ?>assets/img/gradient.jpg" style="width:700px;"/>
						</p>
						<p class="qus">9. What Do You Understand by Backpropagation?</p>
						<p class="ans">This is one of the most frequently asked deep learning interview questions. Backpropagation is a technique to improve the performance of the network. It backpropagates the error and updates the weights to reduce the error.
						<img src="<?= base_url(); ?>assets/img/backpropagation.jpg" style="width:700px;"/>
						</p>
						<p class="qus">10. What Is the Difference Between a Feedforward Neural Network and Recurrent Neural Network?</p>
						<p class="ans">In this deep learning interview question, the interviewee expects you to give a detailed answer.<br>
A Feedforward Neural Network signals travel in one direction from input to output. There are no feedback loops; the network considers only the current input. It cannot memorize previous inputs (e.g., CNN).<br>
A Recurrent Neural Network’s signals travel in both directions, creating a looped network. It considers the current input with the previously received inputs for generating the output of a layer and can memorize past data due to its internal memory.<br>
						<img src="<?= base_url(); ?>assets/img/feedforward.jpg" style="width:700px;"/>
						</p>
						<p class="qus">11. What Are the Applications of a Recurrent Neural Network (RNN)?</p>
						<p class="ans">The RNN can be used for sentiment analysis, text mining, and image captioning. Recurrent Neural Networks can also address time series problems such as predicting the prices of stocks in a month or quarter.<br>
Softmax is an activation function that generates the output between zero and one. It divides each output, such that the total sum of the outputs is equal to one. Softmax is often used for output layers.<br>
						<img src="<?= base_url(); ?>assets/img/recurrent.jpg" style="width:700px;"/><br>
						ReLU (or Rectified Linear Unit) is the most widely used activation function. It gives an output of X if X is positive and zeros otherwise. ReLU is often used for hidden layers.<br>
						<img src="<?= base_url(); ?>assets/img/rnn.jpg" style="width:700px;"/>
						</p>
						<p class="qus">12. What Are Hyperparameters?</p>
						<p class="ans">This is another frequently asked deep learning interview question. With neural networks, you’re usually working with hyperparameters once the data is formatted correctly. A hyperparameter is a parameter whose value is set before the learning process begins. It determines how a network is trained and the structure of the network (such as the number of hidden units, the learning rate, epochs, etc.).<br>
						<img src="<?= base_url(); ?>assets/img/hyperparameter.jpg" style="width:700px;"/>
						</p>
						<p class="qus">13. What Will Happen If the Learning Rate Is Set Too Low or Too High?</p>
						<p class="ans">When your learning rate is too low, training of the model will progress very slowly as we are making minimal updates to the weights. It will take many updates before reaching the minimum point.<br>
If the learning rate is set too high, this causes undesirable divergent behavior to the loss function due to drastic updates in weights. It may fail to converge (model can give a good output) or even diverge (data is too chaotic for the network to train).<br>
						<img src="<?= base_url(); ?>assets/img/learningrate.jpg" style="width:700px;"/>
						</p>
						<p class="qus">14. What Is Dropout and Batch Normalization?</p>
						<p class="ans">Dropout is a technique of dropping out hidden and visible units of a network randomly to prevent overfitting of data (typically dropping 20 percent of the nodes). It doubles the number of iterations needed to converge the network.<br>
						<img src="<?= base_url(); ?>assets/img/batchnormalization.jpg" style="width:700px;"/><br>
						Batch normalization is the technique to improve the performance and stability of neural networks by normalizing the inputs in every layer so that they have mean output activation of zero and standard deviation of one.
						</p>
						<p class="qus">15. What Is the Difference Between Batch Gradient Descent and Stochastic Gradient Descent?</p>
						<table class="table table-striped">
						  <thead>
							<tr>
							  <th scope="col">Batch Gradient Descent</th>
							  <th scope="col">Stochastic Gradient Descent</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td>The batch gradient computes the gradient using the entire dataset.</td>
							  <td>The stochastic gradient computes the gradient using a single sample.</td>
							</tr>
							<tr>
							  <td>It takes time to converge because the volume of data is huge, and weights update slowly.</td>
							  <td>It converges much faster than the batch gradient because it updates weight more frequently.</td>
							</tr>
						  </tbody>
						</table>
						<p class="qus">16. What is Overfitting and Underfitting, and How to Combat Them?</p>
						<p class="ans">Overfitting occurs when the model learns the details and noise in the training data to the degree that it adversely impacts the execution of the model on new information. It is more likely to occur with nonlinear models that have more flexibility when learning a target function. An example would be if a model is looking at cars and trucks, but only recognizes trucks that have a specific box shape. It might not be able to notice a flatbed truck because there's only a particular kind of truck it saw in training. The model performs well on training data, but not in the real world.<br>
Underfitting alludes to a model that is neither well-trained on data nor can generalize to new information. This usually happens when there is less and incorrect data to train a model. Underfitting has both poor performance and accuracy.<br>
To combat overfitting and underfitting, you can resample the data to estimate the model accuracy (k-fold cross-validation) and by having a validation dataset to evaluate the model.
						</p>
						<p class="qus">17. How Are Weights Initialized in a Network?</p>
						<p class="ans">There are two methods here: we can either initialize the weights to zero or assign them randomly.<br>
Initializing all weights to 0: This makes your model similar to a linear model. All the neurons and every layer perform the same operation, giving the same output and making the deep net useless.<br>
Initializing all weights randomly: Here, the weights are assigned randomly by initializing them very close to 0. It gives better accuracy to the model since every neuron performs different computations. This is the most commonly used method.
						</p>
						<p class="qus">18. What Are the Different Layers on CNN?</p>
						<p class="ans">There are four layers in CNN:<br>
<ul>
<li>1.	Convolutional Layer -  the layer that performs a convolutional operation, creating several smaller picture windows to go over the data.
<li>2.	ReLU Layer - it brings non-linearity to the network and converts all the negative pixels to zero. The output is a rectified feature map.</li>
<li>3.	Pooling Layer - pooling is a down-sampling operation that reduces the dimensionality of the feature map.</li>
<li>4.	Fully Connected Layer - this layer recognizes and classifies the objects in the image.</li>
</ul>
						</p>
						<p class="qus">19. What is Pooling on CNN, and How Does It Work?</p>
						<p class="ans">Pooling is used to reduce the spatial dimensions of a CNN. It performs down-sampling operations to reduce the dimensionality and creates a pooled feature map by sliding a filter matrix over the input matrix.<br>
						<img src="<?= base_url(); ?>assets/img/cnn.jpg" style="width:700px;"/><br>
						</p>
						<p class="qus">20. How Does an LSTM Network Work?</p>
						<p class="ans">Long-Short-Term Memory (LSTM) is a special kind of recurrent neural network capable of learning long-term dependencies, remembering information for long periods as its default behavior. There are three steps in an LSTM network:<br>
<ul>
<li>●	Step 1: The network decides what to forget and what to remember.</li>
<li>●	Step 2: It selectively updates cell state values.</li>
<li>●	Step 3: The network decides what part of the current state makes it to the output.</li>
</ul>
						</p>
						<p class="qus">21. What Are Vanishing and Exploding Gradients?</p>
						<p class="ans">While training an RNN, your slope can become either too small or too large; this makes the training difficult. When the slope is too small, the problem is known as a “Vanishing Gradient.” When the slope tends to grow exponentially instead of decaying, it’s referred to as an “Exploding Gradient.” Gradient problems lead to long training times, poor performance, and low accuracy.
						<img src="<?= base_url(); ?>assets/img/deep1.jpg" style="width:500px;"/>
						</p>
						<p class="qus">22. What Is the Difference Between Epoch, Batch, and Iteration in Deep Learning?</p>
						<p class="ans">
<ul>
<li>●	Epoch - Represents one iteration over the entire dataset (everything put into the training model).</li>
<li>●	Batch - Refers to when we cannot pass the entire dataset into the neural network at once, so we divide the dataset into several batches.</li>
<li>●	Iteration - if we have 10,000 images as data and a batch size of 200. then an epoch should run 50 iterations (10,000 divided by 50).</li>
</ul>
						</p>
						<p class="qus">23. Why is Tensorflow the Most Preferred Library in Deep Learning?</p>
						<p class="ans">Tensorflow provides both C++ and Python APIs, making it easier to work on and has a faster compilation time compared to other Deep Learning libraries like Keras and Torch. Tensorflow supports both CPU and GPU computing devices.
						</p>
						<p class="qus">24. What Do You Mean by Tensor in Tensorflow?</p>
						<p class="ans">This is another most frequently asked deep learning interview question. A tensor is a mathematical object represented as arrays of higher dimensions. These arrays of data with different dimensions and ranks fed as input to the neural network are called “Tensors.”
						<img src="<?= base_url(); ?>assets/img/deep2.jpg" style="width:500px;"/>
						</p>
						<p class="qus">25. What Are the Programming Elements in Tensorflow?</p>
						<p class="ans">Constants - Constants are parameters whose value does not change. To define a constant we use  tf.constant() command. For example:<br>
a = tf.constant(2.0,tf.float32)<br>
b = tf.constant(3.0)<br>
Print(a, b)<br>
Variables - Variables allow us to add new trainable parameters to graph. To define a variable, we use the tf.Variable() command and initialize them before running the graph in a session. An example:<br>
W = tf.Variable([.3].dtype=tf.float32)<br>
b = tf.Variable([-.3].dtype=tf.float32)<br>
Placeholders - these allow us to feed data to a tensorflow model from outside a model. It permits a value to be assigned later. To define a placeholder, we use the tf.placeholder() command. An example:<br>
a = tf.placeholder (tf.float32)<br>
b = a*2<br>
with tf.Session() as sess:<br>
result = sess.run(b,feed_dict={a:3.0})<br>
print result<br>
Sessions - a session is run to evaluate the nodes. This is called the “Tensorflow runtime.” For example:<br>
a = tf.constant(2.0)<br>
b = tf.constant(4.0)<br>
c = a+b<br>
# Launch Session<br>
Sess = tf.Session()<br>
# Evaluate the tensor c<br>
print(sess.run(c))<br>
						</p>
						<p class="qus">26. Explain a Computational Graph.</p>
						<p class="ans">Everything in a tensorflow is based on creating a computational graph. It has a network of nodes where each node operates, Nodes represent mathematical operations, and edges represent tensors. Since data flows in the form of a graph, it is also called a “DataFlow Graph.”
						</p>
						<p class="qus">27. Explain Generative Adversarial Network.</p>
						<p class="ans">Suppose there is a wine shop purchasing wine from dealers, which they resell later. But some dealers sell fake wine. In this case, the shop owner should be able to distinguish between fake and authentic wine.<br>
The forger will try different techniques to sell fake wine and make sure specific techniques go past the shop owner’s check. The shop owner would probably get some feedback from wine experts that some of the wine is not original. The owner would have to improve how he determines whether a wine is fake or authentic.<br>
The forger’s goal is to create wines that are indistinguishable from the authentic ones while the shop owner intends to tell if the wine is real or not accurately.<br>
<img src="<?= base_url(); ?>assets/img/deep3.jpg" style="width:500px;"/><br>
Let us understand this example with the help of an image shown above.<br>
There is a noise vector coming into the forger who is generating fake wine.<br>
Here the forger acts as a Generator.<br>
The shop owner acts as a Discriminator.<br>
The Discriminator gets two inputs; one is the fake wine, while the other is the real authentic wine. The shop owner has to figure out whether it is real or fake.<br>
So, there are two primary components of Generative Adversarial Network (GAN) named:<br>
<ul>
<li>1.	Generator</li>
<li>2.	Discriminator</li>
</ul>
<p>The generator is a CNN that keeps keys producing images and is closer in appearance to the real images while the discriminator tries to determine the difference between real and fake images The ultimate aim is to make the discriminator learn to identify real and fake images.
						</p>
						<p class="qus">28. What Is an Auto-encoder?</p>
						<p class="ans">
<img src="<?= base_url(); ?>assets/img/deep4.jpg" style="width:500px;"/><br>
This Neural Network has three layers in which the input neurons are equal to the output neurons. The network's target outside is the same as the input. It uses dimensionality reduction to restructure the input. It works by compressing the image input to a latent space representation then reconstructing the output from this representation.
						</p>
						<p class="qus">29. What Is Bagging and Boosting?</p>
						<p class="ans">Bagging and Boosting are ensemble techniques to train multiple models using the same learning algorithm and then taking a call.<br>
<img src="<?= base_url(); ?>assets/img/deep5.jpg" style="width:500px;"/><br>
With Bagging, we take a dataset and split it into training data and test data. Then we randomly select data to place into the bags and train the model separately.<br>
<img src="<?= base_url(); ?>assets/img/deep6.jpg" style="width:500px;"/><br>
With Boosting, the emphasis is on selecting data points which give wrong output to improve the accuracy.
						</p>
						<p class="qus">30. What is the significance of using the Fourier transform in Deep Learning tasks?</p>
						<p class="ans">The Fourier transform function efficiently analyzes, maintains, and manages large datasets. You can use it to generate real-time array data that is helpful for processing multiple signals.
						</p>
						<p class="qus">31. What do you understand by transfer learning? Name a few commonly used transfer learning models.</p>
						<p class="ans">Transfer learning is the process of transferring the learning from a model to another model without having to train it from scratch. It takes critical parts of a pre-trained model and applies them to solve new but similar machine learning problems.<br>
Some of the popular transfer learning models are:<br>
<ul>
<li>●	VGG-16</li>
<li>●	BERT</li>
<li>●	GTP-3</li>
<li>●	Inception V3</li>
<li>●	XCeption</li>
</ul>
						</p>
						<p class="qus">32. What is the difference between SAME and VALID padding in Tensorflow?</p>
						<p class="ans">Using the Tensorflow library, tf.nn.max_pool performs the max-pooling operation. Tf.nn.max_pool has a padding argument that takes 2 values - SAME or VALID.<br>
With padding == “SAME” ensures that the filter is applied to all the elements of the input.<br>
The input image gets fully covered by the filter and specified stride. The padding type is named SAME as the output size is the same as the input size (when stride=1).<br>
With padding == “VALID” implies there is no padding in the input image. The filter window always stays inside the input image. It assumes that all the dimensions are valid so that the input image gets fully covered by a filter and the stride defined by you.
						</p>
						<p class="qus">33. What are some of the uses of Autoencoders in Deep Learning?</p>
						<p class="ans"><ul>
<li>●	Autoencoders are used to convert black and white images into colored images.</li>
<li>●	Autoencoder helps to extract features and hidden patterns in the data.</li>
<li>●	It is also used to reduce the dimensionality of data.</li>
<li>●	It can also be used to remove noises from images.</li>
</ul>
						</p>
						<p class="qus">34. What is the Swish Function?</p>
						<p class="ans">Swish is an activation function proposed by Google which is an alternative to the ReLU activation function.<br> 
It is represented as: f(x) = x * sigmoid(x).<br>
The Swish function works better than ReLU for a variety of deeper models.<br> 
The derivative of Swist can be written as: y’ = y + sigmoid(x) * (1 - y)
						</p>
						<p class="qus">35. What are the reasons for mini-batch gradient being so useful?</p>
						<p class="ans"><ul>
<li>●	Mini-batch gradient is highly efficient compared to stochastic gradient descent.</li>
<li>●	It lets you attain generalization by finding the flat minima.</li>
<li>●	Mini-batch gradient helps avoid local minima to allow gradient approximation for the whole dataset.</li>
</ul>
						</p>
						<p class="qus">36. What do you understand by Leaky ReLU activation function?</p>
						<p class="ans">Leaky ReLU is an advanced version of the ReLU activation function. In general, the ReLU function defines the gradient to be 0 when all the values of inputs are less than zero. This deactivates the neurons. To overcome this problem, Leaky ReLU activation functions are used. It has a very small slope for negative values instead of a flat slope.
						</p>
						<p class="qus">37. What is Data Augmentation in Deep Learning?</p>
						<p class="ans">Data Augmentation is the process of creating new data by enhancing the size and quality of training datasets to ensure better models can be built using them. There are different techniques to augment data such as numerical data augmentation, image augmentation, GAN-based augmentation, and text augmentation.
						</p>
						<p class="qus">38. Explain the Adam optimization algorithm.</p>
						<p class="ans">Adaptive Moment Estimation or Adam optimization is an extension to the stochastic gradient descent. This algorithm is useful when working with complex problems involving vast amounts of data or parameters. It needs less memory and is efficient.<br> 
Adam optimization algorithm is a combination of two gradient descent methodologies -<br> 
Momentum and Root Mean Square Propagation.
						</p>
						<p class="qus">39. Why is a convolutional neural network preferred over a dense neural network for an image classification task?</p>
						<p class="ans"><ul>
<li>●	The number of parameters in a convolutional neural network is much more diminutive than that of a Dense Neural Network. Hence, a CNN is less likely to overfit.</li>
<li>●	CNN allows you to look at the weights of a filter and visualize what the network learned. So, this gives a better understanding of the model.</li>
<li>●	CNN trains models in a hierarchical way, i.e., it learns the patterns by explaining complex patterns using simpler ones.</li>
</ul>
						</p>
						<p class="qus">40. Which strategy does not prevent a model from over-fitting to the training data?<br>
						<ul>
<li>1.	Dropout</li>
<li>2.	Pooling</li>
<li>3.	Data augmentation</li>
<li>4.	Early stopping</li>
</ul>                   
                        </p>
						<p class="ans">Answer: b) Pooling - It’s a layer in CNN that performs a downsampling operation.
						</p>
						<p class="qus">41. Explain two ways to deal with the vanishing gradient problem in a deep neural network.                  
                        </p>
						<p class="ans"><ul>
<li>●	Use the ReLU activation function instead of the sigmoid function</li>
<li>●	Initialize neural networks using Xavier initialization that works with tanh activation.</li>
</ul>
						</p>
						<p class="qus">42. Why is a deep neural network better than a shallow neural network?</p>
						<p class="ans">Both deep and shallow neural networks can approximate the values of a function. But the deep neural network is more efficient as it learns something new in every layer. A shallow neural network has only one hidden layer. But a deep neural network has several hidden layers that create a deeper representation and computation capability.
						</p>
						<p class="qus">43. What is the need to add randomness in the weight initialization process?</p>
						<p class="ans">If you set the weights to zero, then every neuron at each layer will produce the same result and the same gradient value during backpropagation. So, the neural network won’t be able to learn the function as there is no asymmetry between the neurons. Hence, randomness to the weight initialization process is crucial.
						</p>
						<p class="qus">44. How can you train hyperparameters in a neural network?</p>
						<p class="ans">Hyperparameters in a neural network can be trained using four components:<br>
Batch size: Indicates the size of the input data.<br>
Epochs: Denotes the number of times the training data is visible to the neural network to train.<br> 
Momentum: Used to get an idea of the next steps that occur with the data being executed.<br>
Learning rate: Represents the time required for the network to update the parameters and learn.
						</p>
						<p class="qus">45. What do you understand about Neural Networks in the context of Deep Learning?</p>
						<p class="ans">Neural Networks are artificial systems that have a lot of resemblance to the biological neural networks in the human body. A neural network is a set of algorithms that attempts to recognize underlying relationships in a batch of data using a method that mimics how the human brain works. Without any task-specific rules, these systems learn to do tasks by being exposed to a variety of datasets and examples. The notion is that instead of being programmed with a pre-coded understanding of these datasets, the system derives identifying traits from the data it is fed to. Neural networks are built on threshold logic computational models.  Because neural networks can adapt to changing input, they can produce the best possible outcome without requiring the output criteria to be redesigned.
						</p>
						<p class="qus">46. Explain learning rate in the context of neural network models. What happens if the learning rate is too high or too low?</p>
						<p class="ans">Learning rate is a number that ranges from 0 to 1. It is one of the most important tunable hyperparameters in neural network training models. The learning rate determines how quickly or slowly a neural network model adapts to a given situation and learns. A higher learning rate value indicates that the model only needs a few training epochs and produces rapid changes, whereas a lower learning rate indicates that the model may take a long time to converge or may never converge and become stuck on a poor solution. As a result, it is recommended that a good learning rate value be established by trial and error rather than using a learning rate that is too low or too high.<br>
						<img src="<?= base_url(); ?>assets/img/deep7.png" style="width:500px;"/><br>
						In the above image, we can clearly see that a big learning rate leads us to move away from the desired output. However, having a small learning rate leads us to the desired output eventually.
						</p>
						<p class="qus">47. What do you mean by end-to-end learning?</p>
						<p class="ans">It's a deep learning procedure in which a model is fed raw data and the entire data is trained at the same time to create the desired result with no intermediate steps. It is a deep learning method in which all of the different steps are trained simultaneously rather than sequentially. End-to-end learning has the advantage of eliminating the requirement for implicit feature engineering, which usually results in lower bias. Driverless automobiles are an excellent example that you may use in your end-to-end learning content. They are guided by human input and are programmed to learn and interpret information automatically using a CNN to fulfill tasks. Another good example is the generation of a written transcript (output) from a recorded audio clip (input). The model here skips all of the steps in the middle, focusing instead on the fact that it can manage the entire sequence of steps and tasks.
						</p>
						<p class="qus">48. What do you understand about gradient clipping in the context of deep learning?</p>
						<p class="ans">Gradient Clipping is a technique for dealing with the problem of exploding gradients (a situation in which huge error gradients build up over time, resulting in massive modifications to neural network model weights during training) that happens during backpropagation. The problem of exploding gradients occurs when the gradients get excessively big during training, causing the model to become unstable. If the gradient has crossed the anticipated range, the gradient values are driven element-by-element to a specific minimum or maximum value. Gradient clipping improves numerical stability while training a neural network, but it has little effect on the performance of the model.
						</p>
						<p class="qus">49. What are the different techniques to achieve data normalization?</p>
						<p class="ans">Following are the different techniques employed to achieve data normalization:-<br>
●	Rescaling: Rescaling data is the process of multiplying each member of a data set by a constant term k, or changing each integer x to f(X), where f(x) = kx and k and x are both real values. The simplest of all approaches, rescaling (also known as "min-max normalization"), is calculated as:<br>

  {"detectHand":false} <br>

This represents the rescaling factor for every data point x.<br>
<img src="<?= base_url(); ?>assets/img/deep8.png" style="width:500px;"/><br>
●	Mean Normalisation: In the transformation process, this approach employs the mean of the observations:<br>

 {"detectHand":false}><br>

This represents the mean normalizing factor for every data point x.<br>
<img src="<?= base_url(); ?>assets/img/deep9.png" style="width:500px;"/><br>
●	Z-score Normalisation: This technique, also known as standardization, employs the Z-score or "standard score." SVM and logistic regression are two examples of machine learning algorithms that utilise it:<br>

 {"detectHand":false}<br>

This represents the Z-score.<br>
<img src="<?= base_url(); ?>assets/img/deep10.png" style="width:500px;"/>
						</p>
						<p class="qus">50. What are the applications of deep learning?</p>
						<p class="ans">Following are some of the applications of deep learning:-<br>
<ul>
<li>●	Pattern recognition and natural language processing.</li>
<li>●	Recognition and processing of images.</li>
<li>●	Automated translation.</li>
<li>●	Analysis of sentiment.</li>
<li>●	System for answering questions.</li>
<li>●	Classification and Detection of Objects.</li>
<li>●	Handwriting Generation by Machine.</li>
<li>●	Automated text generation.</li>
<li>●	Colorization of Black and White images.</li>
</ul>
						</p>
						<p class="qus">51. What are the advantages of neural networks?</p>
						<p class="ans">Following are the advantages of neural networks:<br>
<ul>
<li>●	Neural networks are extremely adaptable, and they may be used for both classification and regression problems, as well as much more complex problems. Neural networks are also quite scalable. We can create as many layers as we wish, each with its own set of neurons. When there are a lot of data points, neural networks have been shown to generate the best outcomes. They are best used with non-linear data such as images, text, and so on. They can be applied to any data that can be transformed into a numerical value.</li>
<li>●	Once the neural network mode has been trained, they deliver output very fast. Thus, they are time-effective.</li>
</ul>
						</p>
						<p class="qus">52. What are the disadvantages of neural networks?</p>
						<p class="ans">Following are the disadvantages of neural networks:-<br>
<ul>
<li>●	The "black box" aspect of neural networks is a well-known disadvantage. That is, we have no idea how or why our neural network produced a certain result. When we enter a dog image into a neural network and it predicts that it is a duck, we may find it challenging to understand what prompted it to make this prediction.</li>
<li>●	It takes a long time to create a neural network model.</li>
<li>●	Neural networks models are computationally expensive to build because a lot of computations need to be done at each layer.</li>
<li>●	A neural network model requires significantly more data than a traditional machine learning model to train</li>
</ul>
						</p>
						<p class="qus">53. Difference between multi-class and multi-label classification problems.</p>
						<p class="ans"><img src="<?= base_url(); ?>assets/img/deep11.png" style="width:500px;"/><br>
The classification task in a multi-class classification problem has more than two mutually exclusive classes (classes that have no intersection or no attributes in common), whereas in a multi-label classification problem, each label has a different classification task, although the tasks are related in some way. For example, classifying a group of photographs of animals that could be cats, dogs, or bears is a multi-class classification problem that assumes each sample can be of only one type, implying that an image can be categorized as either a cat or a dog, but not both at the same time.<br>
Now let us assume you wish to manipulate the image below.<br>
<img src="<?= base_url(); ?>assets/img/deep12.png" style="width:500px;"/><br>
The image above must be categorized as both a cat and a dog because it depicts both creatures. A set of labels is allocated to each sample in a multi-label classification issue, and the classes are not mutually exclusive. In a multi-label classification problem, a pattern can belong to one or more classes.
						</p>
						<p class="qus">54. What are the different types of deep neural networks?</p>
						<p class="ans">Following are the different types of deep neural networks:-<br>
<ul>
<li>●	FeedForward Neural Network:- This is the most basic type of neural network, in which flow control starts at the input layer and moves to the output layer. These networks only have a single layer or a single hidden layer. There is no backpropagation mechanism in this network because data only flows in one way. The input layer of this network receives the sum of the weights present in the input. These networks are utilised in the computer vision-based facial recognition method.</li>
<img src="<?= base_url(); ?>assets/img/deep13.png" style="width:500px;"/>-<br>
<li>●	Radial Basis Function Neural Network:- This type of neural network usually has more than one layer, preferably two. The relative distance from any location to the center is determined in this type of network and passed on to the next layer. In order to avoid blackouts, radial basis networks are commonly employed in power restoration systems to restore power in the shortest period possible.</li>
<li>●	Multi-Layer Perceptrons (MLP):- A multilayer perceptron (MLP) is a type of feedforward artificial neural network (ANN). MLPs are the simplest deep neural networks, consisting of a succession of completely linked layers. Each successive layer is made up of a collection of nonlinear functions that are the weighted sum of all the previous layer's outputs (completely linked). Speech recognition and other machine learning systems rely heavily on these networks.</li>
<img src="<?= base_url(); ?>assets/img/deep14.png" style="width:500px;"/><br>
<li>●	Convolutional Neural Network (CNN):- Convolutional Neural Networks are mostly used in computer vision. In contrast to fully linked layers in MLPs, one or more convolution layers extract simple characteristics from input by performing convolution operations in CNN models. Each layer is made up of nonlinear functions of weighted sums at various coordinates of spatially close subsets of the previous layer's outputs, allowing the weights to be reused.
The AI system learns to automatically extract the properties of these inputs to fulfill a specific task, such as picture classification, face identification, and image semantic segmentation, given a sequence of images or videos from the actual world.
</li>
<img src="<?= base_url(); ?>assets/img/deep15.png" style="width:500px;"/><br>
<li>●	Recurrent Neural Network (RNN):- Recurrent Neural Networks were created to solve the sequential input data time-series problem. RNN's input is made up of the current input and prior samples. As a result, the node connections create a directed graph. Furthermore, each neuron in an RNN has an internal memory that stores the information from previous samples' computations. Because of their superiority in processing data with a variable input length, RNN models are commonly employed in natural language processing (NLP). The goal of AI in this case is to create a system that can understand human-spoken natural languages, such as natural language modeling, word embedding, and machine translation.
Each successive layer in an RNN is made up of nonlinear functions of weighted sums of outputs and the preceding state. As a result, the basic unit of RNN is termed "cell," and each cell is made up of layers and a succession of cells that allow recurrent neural network models to be processed sequentially.
</li>
<img src="<?= base_url(); ?>assets/img/deep16.png" style="width:500px;"/><br>
<li>●	Modular Neural Network:- This network is made up of numerous tiny neural networks, rather than being a single network. The sub-networks combine to form a larger neural network, which operates independently to achieve a common goal. These networks are extremely useful for breaking down a large-small problem into smaller chunks and then solving it.</li>
<img src="<?= base_url(); ?>assets/img/deep17.png" style="width:500px;"/><br>
<li>●	Sequence to Sequence Model:-  In most cases, this network is made up of two RNN networks. The network is based on encoding and decoding, which means it has an encoder that processes the input and a decoder that processes the output. This type of network is commonly employed for text processing when the length of the inputting text differs from the length of the outputted text</li>
</ul>
						</p>
						<p class="qus">55. What are the advantages of transfer learning?</p>
						<p class="ans">Following are the advantages of transfer learning :<br>
<ul>
<li>●	Better initial model: In other methods of learning, you must create a model from scratch. Transfer learning is a better starting point because it allows us to perform tasks at a higher level without having to know the details of the starting model.</li>
<li>●	Higher learning rate: Because the problem has already been taught for a similar task, transfer learning allows for a faster learning rate during training.</li>
<li>●	Higher accuracy after training: Transfer learning allows a deep learning model to converge at a higher performance level, resulting in more accurate output, thanks to a better starting point and higher learning rate.</li>
</ul>
						</p>
						<p class="qus">56. Is it possible to train a neural network model by setting all biases to 0? Also, is it possible to train a neural network model by setting all of the weights to 0?</p>
						<p class="ans">Yes, even if all of the biases are set to zero, the neural network model has a chance of learning. 
No, training a model by setting all of the weights to 0 is impossible since the neural network will never learn to complete a task. When all weights are set to zero, the derivatives for each w remain constant, resulting in neurons learning the same features in each iteration. Any constant initialization of weights, not simply zero, is likely to generate a poor result.
						</p>
						<p class="qus">57. In a Convolutional Neural Network (CNN), how can you fix the constant validation accuracy?</p>
						<p class="ans">When training any neural network, constant validation accuracy is a common issue because the network just remembers the sample, resulting in an over-fitting problem. Over-fitting a model indicates that the neural network model performs admirably on the training sample, but the model's performance deteriorates on the validation set. Following are some ways for improving CNN's constant validation accuracy:<br>
						<ul>
<li>●	It is always a good idea to split the dataset into three sections: training, validation, and testing.</li>
<li>●	When working with limited data, this difficulty can be handled by experimenting with the neural network's parameters.</li>
<li>●	By increasing the training dataset's size.</li>
<li>●	By using batch normalization.</li>
<li>●	By implementing regularization</li>
<li>●	By reducing the complexity of the network</li>
</ul>
						</p>
						<p class="qus">58. While building a neural network architecture, how will you decide how many neurons and the hidden layers should the neural network have?</p>
						<p class="ans">There is no clear and fast rule for determining the exact number of neurons and hidden layers required to design a neural network architecture given a business problem. The size of the hidden layer in a neural network should be somewhere between the size of the output layers and that of the input layers. However, there are a few basic ways that might help you get a head start on constructing a neural network architecture:
<ul>
<li>●	The best method to approach any unique real-world predictive modelling problem is to start with some basic systematic experimentation to see what would perform best for any given dataset based on previous experience working with neural networks in similar real-world situations. The network configuration can be chosen based on one's understanding of the problem domain and previous expertise with neural networks. The number of layers and neurons employed on similar issues is always a good place to start when evaluating a neural network's configuration.</li>
<li>●	It is best to start with simple neural network architecture and gradually increase the complexity of the neural network based on predicted output and accuracy.</li>
</ul>
						</p>
						<p class="qus">59. Can a deep learning model be solely built on linear regression?</p>
						<p class="ans"> Yes, if the problem is represented by a linear equation, deep networks can be built using a linear function as the activation function for each layer. A problem that is a composition of linear functions, on the other hand, is a linear function, and there is nothing spectacular that can be accomplished by implementing a deep network because adding more nodes to the network will not boost the machine learning model's predictive capacity.
						</p>
						<p class="qus">60. According to you, which one is more powerful - a two layer neural network without any activation function or a two layer decision tree?</p>
						<p class="ans"> A two-layer neural network is made up of three layers: one input layer, one hidden layer, and one output layer. When dealing with neural networks, an activation function is essential since it is required when dealing with complex and nonlinear functional mappings between inputs and response variables. When there is no activation function in a two-layer neural network, it is simply a linear network. A Neural Network without an Activation function is just a Linear Regression Model, which has limited capability and frequently fails to perform well.<br>
A decision tree with a depth of two layers is known as a two-layer decision tree. Decision Trees are a type of supervised machine learning (that is, the machine is fed with what the input is and what the related output is in the training data) in which the data is continually split according to a parameter. Two entities, decision nodes, and leaves can be used to explain the tree. The decisions or final outcomes are represented by the leaves. And the data is separated at the decision nodes.<br>
When comparing these two models, the two-layer neural network (without activation function) is more powerful than the two-layer decision tree, because the two-layer neural network will consider more attributes while building a model, whereas the two-layer decision tree will only consider 2 or 3 attributes.<br>
<img src="<?= base_url(); ?>assets/img/deep18.png" style="width:500px;"/>-<br>
The figure on the left depicts a 2 layer decision tree and the figure on the right depicts a 2 layer neural network.
						</p>
						<p class="qus">61. Mention the applications of autoencoders.</p>
						<p class="ans">Following are the applications of autoencoders:-<br>
						<ul>
<li>●	Image Denoising: Denoising images is a skill that autoencoders excel at. A noisy image is one that has been corrupted or has a little amount of noise (that is, random variation of brightness or color information in images) in it. Image denoising is used to gain accurate information about the image's content.</li>
<li>●	Dimensionality Reduction: The input is converted into a reduced representation by the autoencoders, which is stored in the middle layer called code. This is where the information from the input has been compressed, and each node may now be treated as a variable by extracting this layer from the model. As a result, we can deduce that by removing the decoder, an autoencoder can be utilised for dimensionality reduction, with the coding layer as the output.</li>
<li>●	Feature Extraction: The encoding section of Autoencoders aids in the learning of crucial hidden features present in the input data, lowering the reconstruction error. During encoding, a new collection of original feature combinations is created.</li>
<li>●	Image Colorization: Converting a black-and-white image to a coloured one is one of the applications of autoencoders. We can also convert a colourful image to grayscale.</li>
<li>●	Data Compression: Autoencoders can be used for data compression. Yet they are rarely used for data compression because of the following reasons:</li>
<li>○	Lossy compression: The autoencoder's output is not identical to the input, but it is a near but degraded representation. They are not the best option for lossless compression.</li>
<li>○	Data-specific: Autoencoders can only compress data that is identical to the data on which they were trained. They differ from traditional data compression algorithms like jpeg or gzip in that they learn features relevant to the provided training data. As a result, we can't anticipate a landscape photo to be compressed by an autoencoder trained on handwritten digits.</li>
</ul>
						</p>
						<p class="qus">62. Differentiate supervised and unsupervised deep learning procedures.</p>
						<p class="ans">
						<ul>
<li>●	Supervised learning is a system in which both input and desired output data are provided. Input and output data are labeled to provide a learning basis for future data processing.</li>
<li>●	Unsupervised procedure does not need labeling information explicitly, and the operations can be carried out without the same. The common unsupervised learning method is cluster analysis. It is used for exploratory data analysis to find hidden patterns or grouping in data.</li>
</ul>
						</p>
						<p class="qus">63. Describe the theory of autonomous form of deep learning in a few words.</p>
						<p class="ans">
						There are several forms and categories available for the particular subject, but the autonomous pattern represents independent or unspecified mathematical bases which are free from any specific categorizer or formula.
						</p>
						<p class="qus">64. What is the use of Deep learning in today's age, and how is it adding data scientists?</p>
						<p class="ans">Deep learning has brought significant changes or revolution in the field of machine learning and data science. The concept of a complex neural network (CNN) is the main center of attention for data scientists. It is widely taken because of its advantages in performing next-level machine learning operations. The advantages of deep learning also include the process of clarifying and simplifying issues based on an algorithm due to its utmost flexible and adaptable nature. It is one of the rare procedures which allow the movement of data in independent pathways. Most of the data scientists are viewing this particular medium as an advanced additive and extended way to the existing process of machine learning and utilizing the same for solving complex day to day issues.
						</p>
						<p class="qus">64. What is the use of Deep learning in today's age, and how is it adding data scientists?</p>
						<p class="ans">Deep learning has brought significant changes or revolution in the field of machine learning and data science. The concept of a complex neural network (CNN) is the main center of attention for data scientists. It is widely taken because of its advantages in performing next-level machine learning operations. The advantages of deep learning also include the process of clarifying and simplifying issues based on an algorithm due to its utmost flexible and adaptable nature. It is one of the rare procedures which allow the movement of data in independent pathways. Most of the data scientists are viewing this particular medium as an advanced additive and extended way to the existing process of machine learning and utilizing the same for solving complex day to day issues.
						</p>
						<p class="qus">65. What are the deep learning frameworks or tools?</p>
						<p class="ans">Deep learning frameworks or tools are:<br>
Tensorflow, Keras, Chainer, Pytorch, Theano & Ecosystem, Caffe2, CNTK, DyNetGensim, DSSTNE, Gluon, Paddle, Mxnet, BigDL
						</p>
						<p class="qus">66. Why is zero initialization not a good weight initialization process?</p>
						<p class="ans">If the set of weights in the network is put to a zero, then all the neurons at each layer will start producing the same output and the same gradients during backpropagation.<br>
As a result, the network cannot learn at all because there is no source of asymmetry between neurons. That is the reason why we need to add randomness to the weight initialization process.
						</p>
						<p class="qus">67. What are the prerequisites for starting in Deep Learning?</p>
						<p class="ans">There are some basic requirements for starting in Deep Learning, which are:<br>
<ul>
<li>●	Machine Learning</li>
<li>●	Mathematics</li>
<li>●	Python Programming</li>
</ul>
						</p>
						<p class="qus">68. What are the supervised learning algorithms in Deep learning?</p>
						<p class="ans">
<ul>
<li>●	Artificial neural network</li>
<li>●	Convolution neural network</li>
<li>●	Recurrent neural network</li>
</ul>
						</p>
						<p class="qus">69. What are the unsupervised learning algorithms in Deep learning?</p>
						<p class="ans">
<ul>
<li>●	Self Organizing Maps</li>
<li>●	Deep belief networks (Boltzmann Machine)</li>
<li>●	Auto Encoders</li>
</ul>
						</p>
						<p class="qus">70. How many layers in the neural network?</p>
						<p class="ans">
<ul>
<li>●	Input Layer</li><br>
The input layer contains input neurons which send information to the hidden layer.<br>
<li>●	Hidden Layer</li><br>
The hidden layer is used to send data to the output layer.<br>
<li>●	Output Layer</li><br>
The data is made available at the output layer.<br>
</ul>
						</p>
						<p class="qus">71. How many types of activation function are available?</p>
						<p class="ans">
<ul>
<li>●	Binary Step</li>
<li>●	Sigmoid</li>
<li>●	Tanh</li>
<li>●	ReLU</li>
<li>●	Leaky ReLU</li>
<li>●	Softmax</li>
<li>●	Swish</li>
</ul>
						</p>
						<p class="qus">72. What is a binary step function?</p>
						<p class="ans">The binary step function is an activation function, which is usually based on a threshold. If the input value is above or below a particular threshold limit, the neuron is activated, then it sends the same signal to the next layer. This function does not allow multi-value outputs.
						</p>
						<p class="qus">73. What is the sigmoid function?</p>
						<p class="ans">The sigmoid activation function is also called the logistic function. It is traditionally a trendy activation function for neural networks. The input data to the function is transformed into a value between 0.0 and 1.0. Input values that are much larger than 1.0 are transformed to the value 1.0. Similarly, values that are much smaller than 0.0 are transformed into 0.0. The shape of the function for all possible inputs is an S-shape from zero up through 0.5 to 1.0. It was the default activation used on neural networks, in the early 1990s.
						</p>
						<p class="qus">74. What is Tanh function?</p>
						<p class="ans">The hyperbolic tangent function, also known as tanh for short, is a similar shaped nonlinear activation function. It provides output values between -1.0 and 1.0. Later in the 1990s and through the 2000s, this function was preferred over the sigmoid activation function as models. It was easier to train and often had better predictive performance.
						</p>
						<p class="qus">75. What is ReLU function?</p>
						<p class="ans">A node or unit which implements the activation function is referred to as a rectified linear activation unit or ReLU for short. Generally, networks that use the rectifier function for the hidden layers are referred to as rectified networks.<br>
Adoption of ReLU may easily be considered one of the few milestones in the deep learning revolution.
						</p>
						<p class="qus">76. What is the softmax function?</p>
						<p class="ans">The softmax function is used to calculate the probability distribution of the event over 'n' different events. One of the main advantages of using softmax is the output probabilities range. The range will be between 0 to 1, and the sum of all the probabilities will be equal to one. When the softmax function is used for multi-classification model, it returns the probabilities of each class, and the target class will have a high probability.
						</p>
						<p class="qus">77. Can Relu function be used in output layer?</p>
						<p class="ans">No, Relu function has to be used in hidden layers.
						</p>
						<p class="qus">78. In which layer softmax activation function used?</p>
						<p class="ans">Softmax activation function has to be used in the output layer.
						</p>
						<p class="qus">79. What do you understand by Tensors?</p>
						<p class="ans">Tensors are nothing but a de facto for representing the data in deep learning. They are just multidimensional arrays, which allows us to represent the data having higher dimensions. In general, we deal with high dimensional data sets where dimensions refer to different features present in the data set
						</p>
						<p class="qus">80. What is Model Capacity?</p>
						<p class="ans">The capacity of a deep learning neural network controls the scope of the types of mapping functions that it can learn. Model capacity can approximate any given function. When there is a higher model capacity, it means that the larger amount of information can be stored in the network.
						</p>
						<p class="qus">81. What is matrix element-wise multiplication? Explain with an example.</p>
						<p class="ans">Element-wise matrix multiplication is used to take two matrices of the same dimensions. It further produces another combined matrix with the elements that are a product of corresponding elements of matrix a and b.
						<img src="<?= base_url(); ?>assets/img/deep19.png" style="width:500px;"/>
						</p>
						<p class="qus">82. What is an RNN?</p>
						<p class="ans">RNN stands for Recurrent Neural Networks. These are the artificial neural networks which are designed to recognize patterns in sequences of data such as handwriting, text, the spoken word, genomes, and numerical time series data. RNN use backpropagation algorithm for training because of their internal memory. RNN can remember important things about the input they received, which enables them to be very precise in predicting what's coming next.
						</p>
						<p class="qus">83. What are the issues faced while training in Recurrent Networks?</p>
						<p class="ans">Recurrent Neural Network uses backpropagation algorithm for training, but it is applied on every timestamp. It is usually known as Back-propagation Through Time (BTT).<br>
There are two significant issues with Back-propagation, such as:<br>

<ul>
<li>●	Vanishing Gradient<br>
When we perform Back-propagation, the gradients tend to get smaller and smaller because we keep on moving backward in the Network. As a result, the neurons in the earlier layer learn very slowly if we compare it with the neurons in the later layers.Earlier layers are more valuable because they are responsible for learning and detecting simple patterns. They are the building blocks of the network.
If they provide improper or inaccurate results, then how can we expect the next layers and complete network to perform nicely and provide accurate results. The training procedure tales long, and the prediction accuracy of the model decreases.
</li>
<li>●	Exploding Gradient<br>
Exploding gradients are the main problem when large error gradients accumulate. They provide result in very large updates to neural network model weights during training.
Gradient Descent process works best when updates are small and controlled. When the magnitudes of the gradient accumulate, an unstable network is likely to occur. It can cause poor prediction of results or even a model that reports nothing useful.
</li>
</ul>
						</p>
						<p class="qus">84. What are the common data structures used in Deep Learning?</p>
						<p class="ans">Deep Learning goes right from the simplest data structures like lists to complicated ones like computation graphs.<br>
Here are the most common ones:<br>

<ul>
<li>●	List: An ordered sequence of elements (You can also mention NumPy ndarrays here)</li>
<li>●	Matrix: An ordered sequence of elements with rows and columns</li>
<li>●	Dataframe: A dataframe is just like a matrix, but it holds actual data with the column names and rows denoting each datapoint in your dataset. If marks of 100 students, their grades, and their details are stored in a dataframe, their details are stored as columns. Each row will represent the data of each of the 100 students</li>
<li>●	Tensors: You will work with them on a daily basis if you have ventured into deep learning. Used both in PyTorch and TensorFlow, tensors are like the basic programming unit of deep learning. Just like multidimensional arrays, we can perform numerous mathematical operations on them. Read more about tensors here</li>
<li>●	Computation Graphs: Since deep learning involves multiple layers and often hundreds, if not thousands of parameters, it is important to understand the flow of computation. A computation graph is just that. A computation graph gives us the sequence of operations performed with each node denoting an operation or a component in the neural network</li>
</ul>
						</p>
						<p class="qus">85. In a CNN, if the input size 5 X 5 and the filter size is 7 X 7, then what would be the size of the output?</p>
						<p class="ans">This is a pretty intuitive answer. As we saw above, we perform the convolution on ‘x’ one step at a time, to the right, and in the end, we got Z with dimensions 2 X 2, for X with dimensions 3 X 3.<br>
Thus, to make the input size similar to the filter size, we make use of padding – adding 0s to the input matrix such that its new size becomes at least 7 X 7. Thus, the output size would be using the formula:<br>
Dimension of image = (n, n) = 5 X 5<br>
Dimension of filter = (f,f)  = 7 X 7<br>
Padding = 1 (adding 1 pixel with value 0 all around the edges)<br>
Dimension of output will be (n+2p-f+1) X (n+2p-f+1) = 1 X 1
						</p>
						<p class="qus">86. What’s the difference between valid and same padding in a CNN?</p>
						<p class="ans">This question has more chances of being a follow-up question to the previous one. Or if you have explained how you used CNNs in a computer vision task, the interviewer might ask this question along with the details of the padding parameters.<br>
<ul>
<li>●	Valid Padding: When we do not use any padding. The resultant matrix after convolution will have dimensions (n – f + 1) X (n – f + 1)</li>
<li>●	Same padding: Adding padded elements all around the edges such that the output matrix will have the same dimensions as that of the input matrix</li>
</ul>
						</p>
						<p class="qus">87. How backpropagation is different in RNN compared to ANN?</p>
						<p class="ans">In Recurrent Neural Networks, we have an additional loop at each node:<br>
						<img src="<?= base_url(); ?>assets/img/deep20.png" style="width:500px;"/>
This loop essentially includes a time component into the network as well. This helps in capturing sequential information from the data, which could not be possible in a generic artificial neural network.<br>
This is why the backpropagation in RNN is called Backpropagation through Time, as in backpropagation at each time step.
						</p>
						<p class="qus">88. Why is GRU faster as compared to LSTM?</p>
						<p class="ans">As you can see, the LSTM model can become quite complex. In order to still retain the functionality of retaining information across time and yet not make a too complex model, we need GRUs.
Basically, in GRUs, instead of having an additional Forget gate, we combine the input and Forget gates into a single Update Gate:
<img src="<?= base_url(); ?>assets/img/deep21.png" style="width:500px;"/><br>
It is this reduction in the number of gates that makes GRU less complex and faster than LSTM. 
						</p>
						<p class="qus">89. How is the transformer architecture better than RNN?</p>
						<p class="ans">Advancements in deep learning have made it possible to solve many tasks in Natural Language Processing. Networks/Sequence models like RNNs, LSTMs, etc. are specifically used for this purpose – so as to capture all possible information from a given sentence, or a paragraph. However, sequential processing comes with its caveats:<br>
<ul>
<li>●	It requires high processing power</li>
<li>●	It is difficult to execute in parallel because of its sequential nature</li>
</ul> 
<p>This gave rise to the Transformer architecture. Transformers use what is called the attention mechanism. This basically means mapping dependencies between all the parts of a sentence.
						</p>
						<p class="qus">90. Describe a project you worked on and the tools/frameworks you used?</p>
						<p class="ans">Now, this is one question that is sure to be asked even if none of the above ones is asked in your deep learning interview. I have included it in the advanced section since you might be grilled on each and every part of the code you have written.<br>
Before the interview, make sure to:<br>
<ul>
<li>●	have your GitHub code updated with the latest code changes you have made</li>
<li>●	be ready to give in-depth explanations on at least 2-3 projects where you used deep learning</li>
</ul> 
<p>When you are asked such a question, it is best to give a small 30-second pitch on what was the:</p>
<ul>
<li>●	problem statement</li>
<li>●	data you used and the framework (like PyTorch or TensorFlow)</li>
<li>●	any pretrained model you used or just the name of the basic model you built upon</li>
<li>●	the value of the evaluation metric you achieved</li>
</ul>
<p>After this, you can start going into detail about the model architecture, what preprocessing steps you had to take, and how that changed the data.<br>
An important point to be noted is that the project need not be a very complicated or sophisticated one. A well-explained object detection project would earn you more points than a poorly-explained video classification project.
						</p>
						<p class="qus">91. Differentiate between a single-layer perceptron and a multi-layer perceptron.</p>
						<table class="table table-striped">
						  <thead>
							<tr>
							  <th scope="col">Single-layer Perceptron</th>
							  <th scope="col">Multi-layer Perceptron</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td>Cannot classify non-linear data points</td>
							  <td>Can classify non-linear data</td>
							</tr>
							<tr>
							  <td>Takes in a limited amount of parameters</td>
							  <td>Withstands a lot of parameters</td>
							</tr>
							<tr>
							  <td>Less efficient with large data</td>
							  <td>Highly efficient with large datasets</td>
							</tr>
						  </tbody>
						</table>
						<p class="qus">92. What is a Restricted Boltzmann Machine?</p>
						<p class="ans">A Restricted Boltzmann Machine, or RBM for short, is an undirected graphical model that is popularly used in Deep Learning today. It is an algorithm that is used to perform:<br>
<ul>
<li>●	Dimensionality reduction</li>
<li>●	Regression</li>
<li>●	Classification</li>
<li>●	Collaborative filtering</li>
<li>●	Topic modeling</li>
</ul> 
						</p>
						<p class="qus">93.List some real-life applications that involve deep learning?</p>
						<p class="ans">A Restricted Boltzmann Machine, or RBM for short, is an undirected graphical model that is popularly used in Deep Learning today. It is an algorithm that is used to perform:<br>
<ul>
<li>●	Dimensionality reduction</li>
<li>●	Regression</li>
<li>●	Classification</li>
<li>●	Collaborative filtering</li>
<li>●	Topic modeling</li>
</ul> 
						</p>
						<p class="qus">93.List some real-life applications that involve deep learning?</p>
						<p class="ans">
<ul>
<li>Google and Facebook are translating text into hundreds of languages at a time. This is being done through some deep learning models being applied to NLP tasks and is a major success story.</li>
<li>●	Conversational agents like Siri, Alexa, Cortana basically work on simplifying the speech recognition techniques through LSTMs and RNNs. </li>
<li>●	Deep learning is being used in impactful computer vision applications such as OCR (Optical Character Recognition) and real-time language translation</li>
<li>●	Multimedia sharing apps like Snapchat and Instagram apply facial feature detection which is another application of deep learning</li>
<li>●	Deep Learning is being used in the Healthcare domain to locate malignant cells and other foreign bodies in order to detect complex diseases.</li>
</ul> 
						</p>
						<p class="qus">94.List some commercial practical applications of ANN?</p>
						<p class="ans">
<ul>
<li>sales forecasting</li>
<li>●	industrial process control</li>
<li>●	customer research</li>
<li>●	data validation</li>
<li>●	risk management</li>
<li>●	target marketing</li>
</ul> 
						</p>
						<p class="qus">95. What does a neuron compute?</p>
						<p class="ans">It computes a linear function (z = Wx+b) followed by an activation function.
						</p>
						<p class="qus">96. What is a Maxout function?</p>
						<p class="ans">Maxout function has been found by Ian Goodfellow, a research scientist at Google brain in 2013. It facilitates optimization by dropout and improves the accuracy of dropout’s fast approximate model averaging technique. It learns not just the relationship between the hidden units, but also the activation function of each hidden unit.  
						</p>
						<p class="qus">97. Why RNN (recurrent neural networks) are used for machine translation, say English to French?</p>
						<p class="ans">
<ul>
<li>It can be trained as a supervised learning problem</li>
<li>●	It is applicable when the input/output is a sequence. (i.e. a sequence of words)</li>
</ul>   
						</p>
						<p class="qus">98. What happens when you increase the regularization hyper parameter lambda?</p>
						<p class="ans">As a result, the weights are then pushed towards becoming smaller (closer to 0) 
						</p>
						<p class="qus">99. Why do we normalize the input x? 
						</p>
						<p class="ans">Normalizing the input x makes the count function faster to optimize. 
						</p>
						<p class="qus">100. Suppose batch gradient descent in a deep network is taking excessively long to find a value of the parameters that achieves a small value for the cost function J(W[1],b[1],...,W[L],b[L]). What are the different techniques you think could help find parameter values that attain a small value for J? 
						</p>
						<p class="ans">
<ul>
<li>●	We should try using adam optimizer</li>
<li>●	Try for better random initialization for the weights</li>
<li>●	Try tuning the learning rate ‘alpha’</li>
<li>●	Must as well try to initialize the weight to 0.</li>
</ul> 
						</p>
						<p class="qus">101. When performing normalization, why do we use epsilon? 
						</p>
						<p class="ans">We use epsilon during normalization to avoid the division by zero.
						</p>
						<p class="qus">102. When searching for a large number of hyperparameters. What is the approach we must follow?
						</p>
						<p class="ans">We must try random values, rather than carrying out systematic research because we don’t know which hyperparameter is more important than other. At the same time, the choice of alpha (learning rate) also matters a lot.
						</p>
						<p class="qus">103. What is a representation learning algorithm?
						</p>
						<p class="ans">Neural network converts data in such a form that it would be better to solve the desired problem and hence, called representation learning.
						</p>
						<p class="qus">104. How does a neural network able to approximate the XNOR function? 
						</p>
						<p class="ans">Neural networks make use of ReLU activation functions, having the power to approximate the non-linear function.
						</p>
						<p class="qus">105. What do you mean by full connection in CNNs? 
						</p>
						<p class="ans">The fully connected layer operates on the flattened input where each input is connected to all the neurons. If present, the fully connected layers are usually found towards the end of the CNN architecture and can be used to optimize the objectives such as class scores.
						</p>
						<p class="qus">106. Explain the cross-entropy function? 
						</p>
						<p class="ans">It is used to define a loss function in machine learning and optimization. Also called the log loss, measures the performance of the classification model whose output is a probability value between 0 and 1.
						</p>
						<p class="qus">107. What is ‘early stopping’? 
						</p>
						<p class="ans">It is a regularization technique that stops the training process as soon as the validation loss reaches a plateau or starts to increase.
						</p>
						<p class="qus">108. What are Gated Recurrent Units (GRUs)? How is it different from LSTM? 
						</p>
						<p class="ans"><ul>
<li>A gated recurrent unit (GRU) is basically an LSTM without an output gate and has 2 gates – reset and update gates, which therefore fully writes the contents from its memory cell to the larger net at each time step.</li>
<li>●	The GRU unit controls the flow of information like the LSTM unit, but without having to use a memory unit. It just exposes the full hidden content without any control.</li>
<li>●	GRU is relatively new, and from my perspective, the performance is on par with LSTM, but computationally more efficient (less complex structure as pointed out). So we are seeing it being used more and more.</li>
</ul> 
						</p>
						<p class="qus">109. What is Tf-Idf? 
						</p>
						<p class="ans">TF-IDF, which stands for term frequency-inverse document frequency, is a scoring measure widely used in text summarization. TF-IDF is intended to reflect how relevant a term is in a given document.<br>
<ul>
<li>●	The intuition behind it is that if a word occurs multiple times in a document, we should boost its relevance as it should be more meaningful than other words that appear fewer times (TF). </li>
<li>●	At the same time, if a word occurs many times in a document but also along with many other documents, maybe it is because this word is just a frequent word; not because it was relevant or meaningful (IDF).</li>
</ul> 
<p>For example: Consider a document containing 100 words wherein the word Rajat appears 3 times.</p><br>
<ul>
<li>1.	The term frequency (tf) for ‘Rajat’ is then TF = (3 / 100) = 0.03.</li>
<li>2.	Now, assume we have 10 million documents and the word ‘Rajat’ appears in 1000 of these. Then, the inverse document frequency (idf) is calculated as IDF = log(10,000,000 / 1,000) = 4.</li>
<li>3.	Thus, the Tf-idf weight is the product of these quantities TF-IDF = 0.03 * 4 = 0.12.</li>
</ul>
						</p>
						<p class="qus">110. What is the relationship between the dropout rate and regularization?
						</p>
						<p class="ans">Higher dropout rate says that more neurons are active. So there would be less regularization.
						</p>
						<p class="qus">111. What is a VGG Network? 
						</p>
						<p class="ans">VGG is a convolutional neural network architecture named after the Visual Geometry Group from Oxford, who developed it. <br>
						Built using:<br>
<ul>
<li>●	Convolutions layers (used only 3*3 size ) </li>
<li>●	Max pooling layers (used only 2*2 size)</li>
<li>●	Fully connected layers at the end </li>
</ul> 
<p>Application:</p><br>
<ul>
<li>●	Given an image, it finds object name in the image</li>
<li>●	It can detect any one of 1000 images</li>
<li>●	It takes input image of size 224 * 224 * 3 (RGB image)</li>
</ul> 
<p>For code snippets to extract features with VGG: https://keras.io/applications/
						</p>
						<p class="qus">112. Explain the following code?model.add(Dropout({{uniform(0, 1)}}))
						</p>
						<p class="ans">This line is used to convey the fact that we wish to tune the value of the keep probability of Dropout and find the best fit among the range of real numbers between 0 and 1.
						</p>
						<p class="qus">113. Explain the following code? What’ll be the shape of ‘c’?<br>
a = np.random.randn(4, 3) # a.shape = (4, 3)<br>
b = np.random.randn(3, 2) # b.shape = (3, 2) c = a * b<br>
						</p>
						<p class="ans">* operator indicates the element-wise multiplication. Element-wise multiplication requires the same dimension between two matrices. It's going to be an error.
						</p>
						<p class="qus">114. Consider the following code snippets: #<br>
a.shape = (3,4) #<br>
b.shape = (4,1) for i in range(3):  for j in range(4):<br>    
c.[i][j] = a[i][j] + b[j] How do you vectorize this?<br>
						</p>
						<p class="ans">C = a + b.T
						</p>
						<p class="qus">115. Assume we store the values for n^[l] in an array called layers, as follows: layer_dims = [n_x, 4,3,2,1]. So layer 1 has four hidden units, layer 2 has 3 hidden units and so on. Write a code using for-loop that will allow you to initialize the parameters for the model?
						</p>
						<p class="ans">for(i in range(1, len(layer_dims))):<br>
    parameter[‘W’ + str(i)] = np.random.randn(layers[i], layers[i - 1])) * 0.01<br>
    parameter[‘b’ + str(i)] = np.random.randn(layers[i], 1) * 0.01<br>
						</p>
						<p class="qus">116. What do you understand by Bidirectional RNNs?
						</p>
						<p class="ans">These are based on the idea that the output at a time may not only depend on the previous elements in the sequence. But also future elements. For example:<br>
To predict a missing word in a sequence you want to look at both the left and the right context. Bidirectional RNNs are quite simple. They are just two RNNs stacked on top of each other. The output computes based on the hidden state of both RNNs.
						</p>
						<p class="qus">117. What is weight decay?
						</p>
						<p class="ans">A regularization technique (such as L2 regularization) that results in gradient descent shrinking the weights on every iteration.
						</p>
						<p class="qus">118. What is the architecture of an LSTM?
						</p>
						<p class="ans">LSTMs have a chain like structure similar to standard RNNs. But instead of having a single neural network layer, there are four, interacting in a very special way.<br>
In the below figure,<br>
<ul>
<li>1.	Ct-1: is the input from memory cell in time point t;</li>
<li>2.	Xt: input in time point t;</li>
<li>3.	ht: output in time point t that goes to both the layers and hidden layer in the next time point.</li>
</ul> 
<p>Thus, every block has three inputs (xt, ht-1, and ct-1) and two outputs (ht and ct).</p><br>
<img src="<?= base_url(); ?>assets/img/deep22.jpg" style="width:500px;"/>denotes vector transfer<br>
<img src="<?= base_url(); ?>assets/img/deep23.jpg" style="width:500px;"/>Line merging here denotes concatenation<br>
<img src="<?= base_url(); ?>assets/img/deep24.jpg" style="width:500px;"/>shows that the information is copied and further transferred in 2 different <br>
<img src="<?= base_url(); ?>assets/img/deep25.jpg" style="width:500px;"/>points to the pointwise operations like vector addition<br>
<img src="<?= base_url(); ?>assets/img/deep26.jpg" style="width:500px;"/>this yellow box is termed as a learned neural network<br>
<img src="<?= base_url(); ?>assets/img/deep27.jpg" style="width:500px;"/><br>
Source<br>
Understanding Step-by-Step: Idea behind the LSTMs<br>
<ul>
<li>1.	We’ve new value xt and value from the previous node ht-1.</li>
<li>2.	In the first step, these values are combined together to go through the sigmoid activation function, where it is decided if the forget valve should be open, closed or open to some extent.</li>
<li>3.	In the next step, the same values, or actual vectors of values, go in parallel through layer operation tanh, where we decide what value we’re going to pass to the memory pipeline, and another layer of operation ‘sigmoid’, where it is decided, if that value is going to be passed to the memory pipeline and to what extent.</li>
<li>4.	Then, we have a memory flowing through the top pipeline. If we have forget the valve open and memory valve closed then the memory will not change. Otherwise, if we have forget valve closed and memory valve open, the memory will be updated completely.</li>
<li>5.	Finally, we’ve got xt and ht-1 combined to decide what part of the memory pipeline is going to become the output of this module.</li>
</ul> 
						</p>
						<p class="qus">119. Explain the Forget gate, Input gate and Output gate in LSTMs?
						</p>
						<p class="ans">The LSTM does have the ability to remove or add information to the cell state, carefully regulated by structures called gates. Gates are a way to optionally let information through. They are composed out of a sigmoid neural net layer and a pointwise multiplication operation.<br>
An LSTM has three of these gates, to protect and control the cell state.<br>
<ul>
<li>●	The first step in our LSTM is to decide what information we’re going to throw away from the cell state. This decision is made by a sigmoid layer called the forget gate layer. It looks at ht−1and xt, and outputs a number between 0 and 1 for each number in the cell state Ct−1. </li>
</ul> 
<p>Where 1 represents- completely keep this while,0 represents- completely get rid of this.</p><br>
<ul>
<li>●	The next step is to decide what new information we’re going to store in the cell state. This has two parts. First, a sigmoid layer called the input gate layer decides which values we’ll update. Next, a tanh layer creates a vector of new candidate values, ~Ct, that could be added to the state.</li>
<li>●	Finally, we need to decide what we’re going to output. This output layer will be based on our cell state, but will be a filtered version. First, we run a sigmoid layer which decides what parts of the cell state we’re going to output. Then, we put the cell state through tanh (to push the values to be between −1 and 1) and multiply it by the output of the sigmoid gate, so that we only output the parts we decided to.</li>
</ul> 
						</p>
						<p class="qus">120. Explain LSTM hyperparameter tuning?</p>
						<p class="ans">Here are few ideas to keep in mind when manually optimizing the hyperparameters:<br>
<ul>
<li>●	Using regularization methods that include l1, l2, dropout, and others help avoid overfitting.</li>
<li>●	More data is always better</li>
<li>●	Train over multiple epochs</li>
<li>●	Early stopping - evaluate the test set performance at each epoch to know when to stop</li>
<li>●	Learning rate is the single most important parameter</li>
<li>●	For LSTMs use soft sign over tanh as it is faster and less prone to saturation (~0 gradients)</li>
<li>●	Optimizers such as RMSprop, AdaGrad or momentum are usually good choices</li>
<li>●	Finally remember data normalization, MSE Loss function + identity activation function for regression, Xavier weight initialization</li>
</ul> 
						</p>
						<p class="qus">121. What AI and deep learning tools are you familiar with, and how proficient are you in them?</p>
						<p class="ans">This question allows you to elaborate on your skills and gives the interviewer a chance to assess your confidence level with AI and deep learning tools. To answer this question effectively, state the tools you have used in your previous job and describe how they work.
						</p>
						<p class="qus">122. What kinds of deep learning problems have you encountered, and how did you handle them?</p>
						<p class="ans">Hiring managers usually ask this question to assess your critical-thinking and problem-solving abilities. To answer this question effectively, walk the hiring manager through how the problem came about and what actions you took to resolve it. Make sure to choose a problem that is related to the job you're applying for.
						</p>
						<p class="qus">123. Have you earned any deep learning certifications?</p>
						<p class="ans">Being able to demonstrate that you have successfully completed a professional certificate program in deep learning can be a huge advantage, as this lets the hiring manager know that you are professionally trained and will not require additional mentoring or instruction to develop deep learning algorithms. You should answer this question honestly and do more than just describe your certifications.
						</p>
						<p class="qus">124. Which do you think is more important: model performance or model accuracy?</p>
						<p class="ans">Interviewers asked this question to evaluate your skill in designing deep learning models. Many candidates justify the need for both performance and accuracy, but when it comes to deep learning, accuracy matters more than performance, as inaccurate information is not useful.
						</p>
						<p class="qus">125. What are the ethical implications of using deep learning?</p>
						<p class="ans">This question allows the hiring manager to explore your knowledge of the ethical implications of deep learning technologies. To answer this question effectively, you should be able to discuss the problems associated with data privacy; segmentation based on sensitive variables such as age, gender or race; models based on biased data inputs; methods to verify and correct models that have caused actual bias.
						</p>
						<p class="qus">126. How does deep learning differ from other machine learning algorithms?</p>
						<p class="ans">The purpose of this question is to assess your ability to explain deep learning concepts in a simple yet comprehensive manner. To answer this question effectively, be as detailed and specific as possible.
						</p>
						<p class="qus">127. What is the most interesting project you have ever worked on?</p>
						<p class="ans">This is one of the most common competency-based questions for any role that requires project management experience. Interviewers usually ask this question to see how well you can manage a situation or a project, what your approach is to resolving challenges and how your abilities would help you to successfully lead a project. They also want to gain insight into how you handle stress and know what your work ethic is like.<br>
To answer this question effectively, use the STAR (Situation, Task, Action, Result) interview response technique to make a concise (yet in-depth) answer. Make sure your response demonstrates your abilities with hitting deadlines, making decisions, setting priorities or delegating tasks.
						</p>
						<p class="qus">128. What are data visualisation libraries?</p>
						<p class="ans">Data visualisation libraries help in understanding complex ideas by using visual elements such as graphs, charts, maps and more. The visualisation tools help you to recognise patterns, trends, outliers and more, making it possible to design your data according to the requirement. Popular data visualisation libraries include D3, React-Vis, Chart.js, vx, and more.
						</p>
						<p class="qus">129. What is inductive reasoning machine learning?</p>
						<p class="ans">Inductive reasoning focuses as much on the conclusion as the premises and treats the conclusion as part of the reasoning to justify any behaviour. Also known as the ‘cause and effect reasoning’, inductive reasoning tries to prove a conclusion by backtracing to the inputs and picks up that logic as part of its learning.
						</p>
						<p class="qus">130. How to choose the appropriate formula to solve issues on classification?</p>
						<p class="ans">Choosing the right metrics and formula to classify your data is extremely important for understanding and optimising the model. Use a model evaluation procedure to choose between different model types, features and tuning parameters. Train and test these models on the same set of data, split-test the models or cross-validate the models by comparing average results with test split results.
						</p>
						<p class="qus">131. What is the most preferred library in Deep Learning and why?</p>
						<p class="ans">Tensorflow is the most preferred library in deep learning.<br>
Tensorflow provides high flexibility owing to its low-level structure. It can fit into any kind of functionality for any model. Tensorflow is popular among researchers as it can be changed according to the requirement and control networks better.
						</p>
						<p class="qus">132. What is the ultimate use of Deep learning in today’s age and how is it aiding data scientists?</p>
						<p class="ans">Deep learning is used for a number of cases including language recognition, self-driving cars, text generation, video and image editing and more. However, the most important use of deep learning is perhaps in the field of computer vision where computers are fed relevant data to learn object detection, image restoration and segmentation, medical diagnostics, monitoring crops and livestock, and more. Scientists are using deep learning across industries to automate surveillance-based and repetitive tasks to improve productivity and accuracy.
						</p>
						<p class="qus">133. What is the use of Fourier Transform in Deep Learning?</p>
						<p class="ans">Fourier transform is used in machine learning to process signals. The fourier series is a method of breaking down signals into frequency components. It is applicable to non-periodic signals such as a delta function and enables such signals to be measured in terms of frequencies instead of time. Fourier transform is useful when you are working on a system where the transfer function is known.<br>
						<img src="<?= base_url(); ?>assets/img/deep28.png" style="width:500px;"/>
						</p>
						<p class="qus">134. What is Multilayer Perceptron and Boltzmann Machine?</p>
						<p class="ans">Similar to single layer perceptron, multilayer perceptrons have input, output and hidden layers. However, since MLPs have more than one hidden layer, they are capable of classifying non-linear classes. Each node in the hidden layers uses a nonlinear activation function along with the input layers to produce the output through ‘backpropagation’. In this method, the neural networks calculate the errors using cost function and pushes the error backwards to the source to train the model more accurately.
The Boltzmann machine is a simplified version of the multilayer perceptron. This is a two layer model with a visible input layer and a hidden layer which makes stochastic decisions for the neurons. The nodes of this model are connected across layers without being connected to each other.
						</p>
						<p class="qus">135. How to prevent overfitting?</p>
						<p class="ans">Overfitting can be prevented by following a few methods namely-<br>
<ul>
<li>●	Cross-validation: Where the initial training data is split into several mini-test sets and each mini data set is used to tune the model.</li>
<li>●	Remove features: Remove irrelevant features manually from the algorithms and use feature selection heuristics to identify the important features</li>
<li>●	Regularisation: This involves various ways of making your model simpler so that there’s little room for error due to obscurity. Adding penalty parameters and pruning your decision tree are ways of doing that.</li>
<li>●	Ensembling: These are machine learning techniques for combining multiple separate predictions. The most popular methods of ensembling are bagging and boosting.</li>
</ul>
						</p>
						<p class="qus">136. Explain the difference between a shallow network and a deep network.</p>
						<p class="ans">A hidden layer, as well as input and output layers, are present in every neural network. Shallow neural networks are those that have only one hidden layer, whereas deep neural networks include numerous hidden layers. Both shallow and deep networks can fit into any function, however, shallow networks require a large number of input parameters, whereas deep networks, because of their several layers, can fit functions with a small number of input parameters. Deep networks are currently favored over shallow networks because the model learns a new and abstract representation of the input at each layer. In comparison to shallow networks, they are also far more efficient in terms of the number of parameters and computations.<br>
						<img src="<?= base_url(); ?>assets/img/deep29.png" style="width:500px;"/>
						</p>
						<p class="qus">137. Which deep learning algorithm is the best for face detection?</p>
						<p class="ans">
						<img src="<?= base_url(); ?>assets/img/deep30.png" style="width:500px;"/><br>
						Face identification may be accomplished using a variety of machine learning methods, but the best ones use Convolutional Neural Networks and deep learning. The following are some notable face detection algorithms: FaceNet, Probablisit, Face Embedding, ArcFace, Cosface, and Spherface.
						</p>
						<p class="qus">138. What do you mean by an epochs in the context of deep learning?</p>
						<p class="ans">An epoch is a terminology used in deep learning that refers to the number of passes the deep learning algorithm has made across the full training dataset. Batches are commonly used to group data sets (especially when the amount of data is very large). The term "iteration" refers to the process of running one batch through the model.<br>
The number of epochs equals the number of iterations if the batch size is the entire training dataset. This is frequently not the case for practical reasons. Several epochs are used in the creation of many models.<br>
There is a general relation which is given by:-<br>
d * e = i * b<br>
where,<br>
d is the dataset size<br>
e is the number of epochs<br>
i is the number of iterations<br>
b is the batch size<br>
						</p>
						<p class="qus">139. While building a neural network architecture, how will you decide how many neurons and the hidden layers should the neural network have?</p>
						<p class="ans">There is no clear and fast rule for determining the exact number of neurons and hidden layers required to design a neural network architecture given a business problem. The size of the hidden layer in a neural network should be somewhere between the size of the output layers and that of the input layers. However, there are a few basic ways that might help you get a head start on constructing a neural network architecture:<br>
<ul>
<li>●	The best method to approach any unique real-world predictive modelling problem is to start with some basic systematic experimentation to see what would perform best for any given dataset based on previous experience working with neural networks in similar real-world situations. The network configuration can be chosen based on one's understanding of the problem domain and previous expertise with neural networks. The number of layers and neurons employed on similar issues is always a good place to start when evaluating a neural network's configuration.</li>
<li>●	It is best to start with simple neural network architecture and gradually increase the complexity of the neural network based on predicted output and accuracy.</li>
</ul>
						</p>
						<p class="qus">140. How do you prepare for a deep learning interview?</p>
						<p class="ans">Preparing for an interview may seem quite intimidating. However, if you are clear with the fundamentals of deep learning, you can answer the questions confidently. Reading blogs, taking up a free online course to brush up your skills, and attending mock interview sessions are some ways through which you can prepare for a deep learning interview.
						</p>
						<p class="qus">141. What are the advantages of transfer learning?</p>
						<p class="ans">Following are the advantages of transfer learning :<br>
<ul>
<li>●	Better initial model: In other methods of learning, you must create a model from scratch. Transfer learning is a better starting point because it allows us to perform tasks at a higher level without having to know the details of the starting model.</li>
<li>●	Higher learning rate: Because the problem has already been taught for a similar task, transfer learning allows for a faster learning rate during training.</li>
<li>●	Higher accuracy after training: Transfer learning allows a deep learning model to converge at a higher performance level, resulting in more accurate output, thanks to a better starting point and higher learning rate.</li>
</ul>
						</p>
						<p class="qus">142. According to you, which one is more powerful - a two layer neural network without any activation function or a two layer decision tree?</p>
						<p class="ans">A two-layer neural network is made up of three layers: one input layer, one hidden layer, and one output layer. When dealing with neural networks, an activation function is essential since it is required when dealing with complex and nonlinear functional mappings between inputs and response variables. When there is no activation function in a two-layer neural network, it is simply a linear network. A Neural Network without an Activation function is just a Linear Regression Model, which has limited capability and frequently fails to perform well.<br>
A decision tree with a depth of two layers is known as a two-layer decision tree. Decision Trees are a type of supervised machine learning (that is, the machine is fed with what the input is and what the related output is in the training data) in which the data is continually split according to a parameter. Two entities, decision nodes, and leaves can be used to explain the tree. The decisions or final outcomes are represented by the leaves. And the data is separated at the decision nodes.<br>
When comparing these two models, the two-layer neural network (without activation function) is more powerful than the two-layer decision tree, because the two-layer neural network will consider more attributes while building a model, whereas the two-layer decision tree will only consider 2 or 3 attributes.<br>
<img src="<?= base_url(); ?>assets/img/deep31.png" style="width:500px;"/><br>
<p>The figure on the left depicts a 2 layer decision tree and the figure on the right depicts a 2 layer neural network.
						</p>
						<p class="qus">143. Differentiate between bias and variance in the context of deep learning models. How can you achieve balance between the two?</p>
						<p class="ans">Comprehending prediction errors is crucial when it comes to understanding predictions. Reducible (errors that arise due to squared bias or squared variance) and irreducible (errors that arise due to the randomness or natural variability in a system and cannot be reduced by varying the model) mistakes are the two primary types of errors. There are two types of reducible errors: bias and variance. Gaining a thorough grasp of these flaws aids in the construction of an accurate model by preventing overfitting and underfitting.<br> 
Bias: <br>
The bias is defined as the difference between the ML model's predicted values and the actual value. Biasing results in a substantial inaccuracy in both training and testing data. To avoid the problem of underfitting, it is advised that an algorithm be low biassed at all times.<br>
The data predicted is in a straight line format due to significant bias, and hence does not fit accurately in the data set. Underfitting of data is the term for this type of fitting. This occurs when the theory is too straightforward or linear. Consider the graph below as an illustration of a situation like this.<br>
<img src="<?= base_url(); ?>assets/img/deep32.png" style="width:500px;"/><br>
Variance:<br> 
The variance of the model is the variability of model prediction for a given data point, which tells us about the dispersion of our data. It is the difference between the validation error and the training error. The model with high variance has a very complex fit to the training data and so is unable to fit accurately on new data. As a result, while such models perform well on training data, they have high error rates when testing data.<br>
When a model's variance is excessive, it's referred to as Overfitting of Data. Overfitting, which involves accurately fitting the training set using a complicated curve and a high order hypothesis, is not a viable option because the error with unknown data is considerable.<br>
Variance should be kept to a minimum when training a data model.<br>
<img src="<?= base_url(); ?>assets/img/deep33.png" style="width:500px;"/><br>
The model must always aim for a low bias and a low variance in order to achieve the best balance between the two mistakes.
						</p>
						<p class="qus">144. How does Recurrent Neural Network backpropagation vary from Artificial Neural Network backpropagation?</p>
						<p class="ans">Backpropagation in Recurrent Neural Networks differ from that of Artificial Neural Networks in the sense that each node in Recurrent Neural Networks has an additional loop as shown in the following image:<br>
<img src="<?= base_url(); ?>assets/img/deep34.png" style="width:500px;"/><br>
This loop, in essence, incorporates a temporal component into the network. This allows for the capture of sequential information from data, which is impossible with a generic artificial neural network.
						</p>
						<p class="qus">145. What are the topics in deep learning?</p>
						<p class="ans">Deep Learning is a machine learning technology that makes use of neural networks. It is a broad concept that has several topics within it. Some of the concepts under deep learning are: basics of neural networks, common activation functions, recurrent neural networks, convolutional neural networks, back propagation, and more.
						</p>
						<p class="qus">146. What is the best way to learn deep learning?</p>
						<p class="ans">The best way to learn deep learning would vary from one individual to another. However, you can learn through blog posts, YouTube video content, free online courses, taking up a PG program, implementing the concepts learnt in your work environment, and though books. All the methods of learning are equally beneficial.
						</p>
						<p class="qus">147. Can I directly learn deep learning?</p>
						<p class="ans">Deep learning is a part of Machine Learning. To learning Deep Learning concepts, it is necessary to have a basic understanding of ML as well. However, there may be a few algorithms/models that are part of deep learning and not Machine Learning. You can learn those directly.
						</p>
						<p class="qus">148. How do you master deep learning?</p>
						<p class="ans">To master deep learning, start with learning the basic concepts. Once the foundational concepts of deep learning are clear, you can practice and implement the skills that you learnt in your daily work. Working on different projects and real-time activities will help you master deep learning.
						</p>
						<p class="qus">149. How do I start deep learning?</p>
						<p class="ans">To start deep learning, you can head over to Great Learning Academy and take up the Introduction to Deep Learning Free Online Course. This course covers all the basic concepts required for you to step into the world of deep learning and build your career.
						</p>
						<p class="qus">150. How hard is deep learning?</p>
						<p class="ans">The difficulty level of the time taken to learn deep learning varies from one individual to another. If you come from a technical background, it might be slightly easier for you to enter the field. If you are from a non-technical background, you may have to spend a longer amount of time to learn the basics and then deep dive into the other concepts.
						</p>
						<p class="qus">151. How good is deep learning?</p>
						<p class="ans">Deep learning is the best choice when it comes to concepts such as natural language processing or NLP, image processing, and speech recognition. It is extremely powerful in working with unstructured data.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
		
<script>
//disable Copy Functions //
$('body').bind('copy paste',function(e) {
    e.preventDefault(); return false; 
});
</script>